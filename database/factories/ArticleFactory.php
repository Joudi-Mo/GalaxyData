<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'category_id' => '1',
            'title' => $this->faker->word(),
            'body' => $this->faker->paragraph(5),
            'likes' => $this->faker->numberBetween(0, 40),
            'dislikes' => $this->faker->numberBetween(0, 40),
            'is_populair' => $this->faker->boolean(),
            
        ];
    }
}