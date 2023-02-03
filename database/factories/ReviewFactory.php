<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rating' => 4,
            'title' => 'A great product',
            'description' => 'This was my first purchase and I really enjoyed it',
            'customer_id' => 1,
            'product_id' => 1
        ];
    }
}
