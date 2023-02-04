<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $orders = [
           [
               'order_number' => 1,
               'customer_id' => 1,
               'payment_id' => 1,
               'shipping_id' => 1,
           ]
       ];

       foreach($orders as $order)
       {
           \App\Models\Order::factory(1)->create([
               'order_number' => $order['order_number'],
               'customer_id' => $order['customer_id'],
               'payment_id' => $order['payment_id'],
               'shipping_id' => $order['shipping_id'],
           ]);
       }
    }
}
