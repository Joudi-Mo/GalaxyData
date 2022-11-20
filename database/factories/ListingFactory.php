<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userIDs = DB::table('users')->pluck('id');
        $categoryIDs = DB::table('categories')->pluck('id');
        return [
            'user_id' => '1',
            'category_id' => '1',
            // 'user_id' => $this->faker->randomElement($userIDs),
            // 'category_id' => $this->faker->randomElement($categoryIDs),
            'title' => $this->faker->word(),
            'body' => $this->faker->paragraph(5),
            'likes' => $this->faker->numberBetween(0, 40),
            'dislikes' => $this->faker->numberBetween(0, 40),
            
           
            
        ];
    }
}