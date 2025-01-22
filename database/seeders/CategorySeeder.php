<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'parent_id' => null],
            ['name' => 'Mobile Phones', 'parent_id' => 1],
            ['name' => 'Laptops', 'parent_id' => 1],
            ['name' => 'Fashion', 'parent_id' => null],
            ['name' => 'Men\'s Clothing', 'parent_id' => 4],
            ['name' => 'Women\'s Clothing', 'parent_id' => 4],
            ['name' => 'Home Appliances', 'parent_id' => null],
            ['name' => 'Kitchen Appliances', 'parent_id' => 7],
            ['name' => 'Furniture', 'parent_id' => null],
            ['name' => 'Living Room Furniture', 'parent_id' => 9],
            ['name' => 'Bedroom Furniture', 'parent_id' => 9],
            ['name' => 'Toys', 'parent_id' => null],
            ['name' => 'Outdoor Toys', 'parent_id' => 12],
            ['name' => 'Educational Toys', 'parent_id' => 12],
            ['name' => 'Books', 'parent_id' => null],
            ['name' => 'Fiction', 'parent_id' => 15],
            ['name' => 'Non-Fiction', 'parent_id' => 15],
            ['name' => 'Sports', 'parent_id' => null],
            ['name' => 'Indoor Sports', 'parent_id' => 18],
            ['name' => 'Outdoor Sports', 'parent_id' => 18],
        ];

        // Insert data into the database
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'parent_id' => $category['parent_id'],
            ]);
        }
    }
}
