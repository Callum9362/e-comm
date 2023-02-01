<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Cotton T-shirt',
                'description' => 'A Cotton t-shirt made from the finest cotton',
                'price' => 10,
                'stock' => 100,
                'category_id' => 3
            ],
            [
                'name' => 'Harry Potter Book 1',
                'description' => 'The first harry potter book',
                'price' => 10,
                'stock' => 100,
                'category_id' => 1
            ]
        ];

        foreach($products as $product)
        {
            \App\Models\Product::factory(1)->create([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'category_id' => $product['category_id']
            ]);
        }
    }
}
