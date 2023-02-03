<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            [
                'type' => 'shipping',
                'street' => '37 Strett Name',
                'city' => 'New York',
                'state' => 'New York',
                'country' => 'United States',
                'zip' => '77576',
                'customer_id' => 1
            ],
        ];

        foreach($addresses as $address)
        {
            \App\Models\Address::factory(1)->create([
                'type' => $address['type'],
                'street' => $address['street'],
                'city' => $address['city'],
                'state' => $address['state'],
                'country' => $address['country'],
                'zip' => $address['zip'],
                'customer_id' => 1
            ]);
        }
    }
}
