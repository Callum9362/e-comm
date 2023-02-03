<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shippingOrders = [
            [
                'method' => 'post',
                'status' => 'In progress',
                'date' => Carbon::now(),
                'address_id' => 1,
                'order_id' => 1
            ],
        ];

        foreach($shippingOrders as $shipping)
        {
            \App\Models\Shipping::factory(1)->create([
                'method' => $shipping['method'],
                'status' => $shipping['status'],
                'date' => $shipping['date'],
                'address_id' => $shipping['address_id'],
                'order_id' => $shipping['order_id']
            ]);
        }
    }
}
