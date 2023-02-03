<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'type' => 'shipping',
            'street' => '37 Strett Name',
            'city' => 'New York',
            'state' => 'New York',
            'country' => 'United States',
            'zip' => '77576',
            'customer_id' => 1
        ];
    }
}
