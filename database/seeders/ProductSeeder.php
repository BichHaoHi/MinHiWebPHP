<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            Product::create([
                'name' => $faker->word,
                'type' => $faker->word,
                'provider' => $faker->company,
                'sex' => $faker->randomElement(['Male', 'Female']),
                'skin_problem' => $faker->sentence,
                'skin_type' => $faker->word,
                'description' => $faker->paragraph,
                'quantity' => $faker->randomFloat(2, 10, 100),
                'price' => $faker->randomFloat(2, 10, 100),
            ]);
        }
    }
}
