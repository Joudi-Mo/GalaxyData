<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'tag' => 'TV',
                'created_at'  => now()
            ],
            [
                'tag' => 'Sports',
                'created_at'  => now()
            ],
            [
                'tag' => 'YouTube',
                'created_at'  => now()
            ],
            [
                'tag' => 'Companies',
                'created_at'  => now()
            ],
            [
                'tag' => 'Facebook',
                'created_at'  => now()
            ],
            [
                'tag' => 'Minecraft',
                'created_at'  => now()
            ],
            [
                'tag' => 'Something',
                'created_at'  => now()
            ],
            [
                'tag' => 'Nature',
                'created_at'  => now()
            ],
            [
                'tag' => 'Gaming',
                'created_at'  => now()
            ]
        ]);
    }
}
