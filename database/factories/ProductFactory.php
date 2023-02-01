<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Cotton T-shirt',
            'description' => 'A Cotton t-shirt made from the finest cotton',
            'price' => 10,
            'stock' => 100,
            'category_id' => 3
        ];
    }
}
