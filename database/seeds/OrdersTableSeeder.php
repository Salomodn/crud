<?php

use Illuminate\Database\Seeder;
use \App\Order;
use App\Product;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_detail = Product::where('name', 'Order')->first();

        //$subscriber->roles()->attach($role_subscriber);
        $faker = \Faker\Factory::create();
        // And now let's generate a few orders :
        for ($i = 0; $i < 10; $i++) {
            $order = Order::create([
                'order_number' => 'order_'.($i+1),
            ]);
            $order->products()->save($order);
        }
    }
}
