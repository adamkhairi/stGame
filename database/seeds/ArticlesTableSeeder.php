<?php

use App\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Article::truncate();

        $faker = Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'img' => $faker->imageUrl(),
                'body' => $faker->paragraph,
                'votes' => $faker->numberBetween(0 , 100),
                'active'=>$faker->boolean,
            ]);
        }
    }
}
