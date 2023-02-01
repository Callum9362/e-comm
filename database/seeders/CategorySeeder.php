<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Books',
                'description' => 'Buy the latest book releases from your favorite authors'
            ],
            [
                'name' => 'Movies',
                'description' => 'Buy the latest movie releases'
            ],
            [
                'name' => 'Clothes',
                'description' => 'Get the latest look with our fashion range'
            ],
            [
                'name' => 'Electronics',
                'description' => 'For all the up to date tech'
            ],
            [
                'name' => 'Pharmacy',
                'description' => 'Get your prescription here'
            ],
            [
                'name' => 'Groceries',
                'description' => 'Buy all your amenities'
            ],
        ];

        foreach($categories as $category)
        {
            \App\Models\Category::factory(1)->create([
                'name' => $category['name'],
                'description' => $category['description']
            ]);
        }
    }
}
