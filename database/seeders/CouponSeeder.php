<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $coupons = [
            [
                'code' => "5HGUG",
                'discount' => 100,
                'type' => "fixed",
                'start_date' => $now,
                'end_date' => $now->addDays(100),
                'usage_limit' => 1
            ],
            [
                'code' => "5HGFG",
                'discount' => 10,
                'type' => "percent",
                'start_date' => $now,
                'end_date' => $now->addDays(100),
                'usage_limit' => 1
            ],
        ];

        foreach($coupons as $coupon)
        {
            \App\Models\Coupon::factory(1)->create([
                'code' => $coupon['code'],
                'discount' => $coupon['discount'],
                'type' => $coupon['type'],
                'start_date' => $now,
                'end_date' => $now->addDays(100),
                'usage_limit' => 1
            ]);
        }
    }
}
