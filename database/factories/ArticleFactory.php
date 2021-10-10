<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'articleNumber' => $this->faker->biasedNumberBetween(10,9000),
            'manufacturer' => $this->faker->company(),
            'model' => $this->faker->firstName(),
            'rank' => $this->faker->biasedNumberBetween(1,1000), // password
            'price' =>  128,
            'category' => strtoupper($this->faker->colorName()),
            'rating' => $this->faker->biasedNumberBetween(1,3),
            'ratingCount' => $this->faker->biasedNumberBetween(1,1000),
        ];
    }
}
