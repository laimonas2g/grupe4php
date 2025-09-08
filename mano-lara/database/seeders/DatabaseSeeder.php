<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'Editor',
        ]);
 
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'Admin',
        ]);
 
        DB::table('users')->insert([
            'name' => 'Barsukas',
            'email' => 'barsukas@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'User',
        ]);
        

        
        $faker = Faker::create('lt_LT');
 
        for ($i = 0; $i < 30; $i++) {
            DB::table('authors')->insert([
            'name' => $faker->firstName,
            'lastname' => $faker->lastName,
            'birth_year' => $faker->numberBetween(1940, 2005),
            ]);
        }

        for ($i = 0; $i < 50; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'pages' => $faker->numberBetween(100, 1000),
                'author_id' => $faker->numberBetween(1, 30),
                'description' => $faker->text(300),
            ]);
        }



    }
}
