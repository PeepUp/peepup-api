<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        Category::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Category::create([ 'label' => $faker->unique()->word(1) ]);
        }
    }
}
