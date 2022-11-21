<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ArticleTagSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($x = 0; $x < 10; $x++) {
            DB::table('article_tags')->insert([
                'article_id' => DB::table('articles')->pluck('id')->random(),
                'tag_id'  => DB::table('tags')->pluck('id')->random()
            ]);
        }
    }
}