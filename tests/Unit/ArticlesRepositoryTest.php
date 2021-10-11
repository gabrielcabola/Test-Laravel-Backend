<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\ArticleSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\MockInterface;
use Mockery;
use Tests\TestCase;
use App\Models\Article;
use App\Repositories\ArticleRepository;

class ArticlesRepositoryTest extends TestCase
{
    use RefreshDatabase;

    protected $articleRepository;

    /**
     * Fetch Using findAll
     *
     * @return void
     */
    public function test_findAll()
    {
        //Populate table
        $this->seed(ArticleSeeder::class);
        // Create a single App\Models\Article instance...
        $article = Article::factory()->create();
        $this->assertDatabaseCount('articles', 45);

        // Use model in tests...
        $articleRepository = new ArticleRepository($article);
        $response = $articleRepository->findAll();


        $item = $response->where('articleNumber', '106865')->first();

        $this->assertEquals($item->manufacturer, 'beyerdynamic');
        $this->assertEquals($item->model, 'DT-990 Pro');
        $this->assertEquals($item->mainImage, null);
        $this->assertEquals($item->price, 129);
        $this->assertEquals($item->category, 'ZUKOSK');
    }

    /**
     * Fetch Using findAll with Reducer.
     *
     * @return void
     */
    public function test_findAll_with_strict_select_fields()
    {
        //Populate table
        $this->seed(ArticleSeeder::class);
        // Create a single App\Models\Article instance...
        $article = Article::factory()->create();
        $this->assertDatabaseCount('articles', 45);

        // Use model in tests...
        $articleRepository = new ArticleRepository($article);
        $response = $articleRepository->findAll(['model', 'price', 'articleNumber']);


        $item = $response->where('articleNumber', '106865')->first();
        $this->assertEquals($item->manufacturer, null);
        $this->assertEquals($item->model, 'DT-990 Pro');
        $this->assertEquals($item->mainImage, null);
        $this->assertEquals($item->price, 129);
        $this->assertEquals($item->category, null);
    }
}
