<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Funny Post',
            'content' => 'This is funny content',
            'category_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Funny Post',
            'content' => 'This is another funny content',
            'category_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => 'Educational Post',
            'content' => 'This is educationa content',
            'category_id' => 2,
        ]);
        DB::table('posts')->insert([
            'title' => 'Another Educational Post',
            'content' => 'This is another educational content',
            'category_id' => 2,
        ]);
    }
}
