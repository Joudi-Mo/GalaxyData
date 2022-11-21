<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Article_TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIDs = DB::table('articles')->pluck('id');
        $categoryIDs = DB::table('tags')->pluck('id');
        return [
            'tag_id' => $this->faker->randomElement($userIDs),
            'article_id' => $this->faker->randomElement($categoryIDs),           
        ];
    }
}
