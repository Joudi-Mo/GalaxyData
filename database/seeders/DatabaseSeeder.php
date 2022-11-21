<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Tag::factory(5)->create();
        Category::factory(5)->create();
        Article::factory(5)->create();
        // ArticleTagSeeder::run();

    
        
        // $userIDs = DB::table('articles')->pluck('id');
        // $categoryIDs = DB::table('tags')->pluck('id');
        // return [
        //     'tag_id' => $this->faker->randomElement($userIDs),
        //     'article_id' => $this->faker->randomElement($categoryIDs),           
        // ];

        $this->call([
            ArticleTagSeeder::class,
        ]);
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}