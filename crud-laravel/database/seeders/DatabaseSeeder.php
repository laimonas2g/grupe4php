<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $faker = Faker::create();

        $books = [];
        for ($i = 0; $i < 20; $i++) {
            $books[] = [
            'title' => $faker->sentence(3),
            'author' => $faker->name,
            'published_year' => $faker->year,
            ];
        }

        DB::table('books')->insert($books);

    }
}