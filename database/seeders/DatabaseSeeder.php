<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Address;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Customer::factory(100)->create();
        $this->call([
            CategorySeeder::class,
            CouponSeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            AddressSeeder::class,
            PaymentSeeder::class,
            ShippingSeeder::class,
            OrderSeeder::class
        ]);
        \App\Models\Wishlist::factory(1)->create();
    }
}
