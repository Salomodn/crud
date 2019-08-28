<?php

use Illuminate\Database\Seeder;
use \App\Supplier;
class SuppliersTableSeeder extends Seeder
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
            $supplier = Supplier::create([
                'name' => $faker->name,
            ]);
            $supplier->products()->save($supplier);
        }
    }
}
