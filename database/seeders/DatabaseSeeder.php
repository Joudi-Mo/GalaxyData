<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        // Tag::factory(5)->create();
        Category::factory(5)->create();
        Article::factory(5)->create();

        $this->call([
            TagSeeder::class,
            ArticleTagSeeder::class,
        ]);

        DB::table('users')->insert([
            'name' => 'Joudi',
            'email' => 'joudi@gmail.com',
            'email_verified_at' => now(),
            // This will turn the password into an unintelligible series of numbers and letters (hashing/encrypting).
            // to protect the database if it got attacked
            'password' => Hash::make('joudi'),
            'is_admin' => '1',
            'remember_token' => Str::random(10)
        ]);
    }
}
