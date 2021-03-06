<?php

use App\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('admins')->insert([
//            'name' => 'ADMIN_1',
//            'email' => 'john@example.com',
//            'password' => Hash::make('12345678'),
//            ]
//        );
        // $this->call(UserSeeder::class);
        Article::truncate();

        $faker = Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 20; $i++) {
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
