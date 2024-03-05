<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;
class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Article::truncate();

        $faker = Faker::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}