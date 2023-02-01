<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $now = Carbon::now();

        return [
            'code' => "5HGUG",
            'discount' => 100,
            'type' => "fixed",
            'start_date' => $now,
            'end_date' => $now->addDays(100),
            'usage_limit' => 1
        ];
    }
}
