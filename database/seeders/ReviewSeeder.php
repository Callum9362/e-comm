<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $reviews = [
           [
               'rating' => 4,
               'title' => 'A great product',
               'description' => 'This was my first purchase and I really enjoyed it',
               'customer_id' => 1,
               'product_id' => 1
           ]
       ];

       foreach($reviews as $review)
       {
           \App\Models\Review::factory(1)->create([
               'rating' => $review['rating'],
               'title' => $review['title'],
               'description' => $review['description'],
               'customer_id' => $review['customer_id'],
               'product_id' => $review['product_id']
           ]);
       }
    }
}
