<?php

use Illuminate\Database\Seeder;
use \App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // And now let's generate a few orders :
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => $faker->name,
                'description' => $faker->name,
                'quantity' => ($i+1),
            ]);
        }
    }
}
