<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records to start from scratch
        Article::truncate();

        // Create dummy data using Faker
        $faker = Faker::create();
        foreach (range(1, 50) as $index) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
