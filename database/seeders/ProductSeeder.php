<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        //Let's truncate our existing records to start from scratch.
        //product::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 50; $i++) {
            Product::create([
                'title' => $faker->word,
                'price' => $faker->randomFloat(2, 0, 1000),
                'image' => $faker->image('public/img', 360, 360, NULL, false, true, NULL, false),
                'category_id' => Category::all()->random()->id,
                'description' => $faker->paragraph,
            ]);
        }
    }
}
