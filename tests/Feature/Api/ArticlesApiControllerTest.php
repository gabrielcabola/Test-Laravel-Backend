<?php

namespace Tests\Feature\Api;

use Database\Seeders\ArticleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\ApiTestCase;
use App\Repositories\ArticleRepository;
use Mockery;
use Mockery\MockInterface;

class ArticlesApiControllerTest extends ApiTestCase
{
    use RefreshDatabase;

    //Clean Table every test

    /**
     * Return a 200 with no articles.
     *
     * @return void
     */
    public function test_empty_articles()
    {
        $response = $this->get($this->apiVersion . '/articles');
        $response->assertStatus(200)
            ->assertStatus(200)
            ->assertExactJson(['status' => true, 'message' => 'No Articles found / empty']);
    }

    /**
     * Return a valid 404.
     *
     * @return void
     */
    public function test_example()
    {
        $this->seed(ArticleSeeder::class);
        $response = $this->get($this->apiVersion . '/');
        $response->assertStatus(404)->assertNotFound();
    }

    /**
     * Return the correct endpoint with correct status code
     */
    public function test_should_return_profile_a_list_of_articles()
    {
        //Populate table
        $this->seed(ArticleSeeder::class);
        // setup
        $schemaHighLevel = [
            'status',
            'articles',
        ];

        // correct endpoint
        $this->get(
            $this->apiVersion . '/articles')
            ->assertStatus(200)
            ->assertJsonStructure($schemaHighLevel);

        // with rail slash
        $this->get(
            $this->apiVersion . '/articles/')
            ->assertStatus(200)
            ->assertJsonStructure($schemaHighLevel);

        // incorrect method
        $this->post(
            $this->apiVersion . '/articles')
            ->assertStatus(405);
    }

    /**
     * Check all the Json Structure
     */
    public function test_json_response_data()
    {
        //Populate table
        $this->seed(ArticleSeeder::class);
        $response = $this->json('GET', $this->apiVersion . '/articles');
        $response
            ->assertStatus(200)
            ->assertJsonFragment(
                json_decode('{"mainImage":{"fileName":"106865.jpg"},
                "manufacturer":"beyerdynamic","model":"DT-990 Pro"}', true));

    }

    /**
     * Return the the exception using a wrong mock repositry
     */
    public function test_exception_triggered_with_correct_response_json()
    {
        //Populate table
        $this->seed(ArticleSeeder::class);
        // Mock repository to create an Exception Error
        $this->instance(
            ArticleRepository::class,
            Mockery::mock(ArticleRepository::class, function (MockInterface $mock) {
                $mock->shouldReceive('findAll')->once();
            })
        );

        // correct endpoint
        $this->get(
            $this->apiVersion . '/articles')
            ->assertStatus(200)
            ->assertJson([
                'error' => 'Received Mockery_3_Illuminate_Support_Collection::count(), but no expectations were specified',
                'status' => false,
            ]);
    }

}
