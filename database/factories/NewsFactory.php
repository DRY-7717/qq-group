<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->word(),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(),
            'body' => fake()->paragraph(),
            'categorynews_id' => 1,
            'user_id' => 1,

        ];
    }
}
