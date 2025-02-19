<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['name' => 'Chicken Curry', 'price' => 12.99, 'category_id' => 1, 'description' => fake()->sentence()],
            ['name' => 'Vegetable Curry', 'price' => 10.99, 'category_id' => 1, 'description' => fake()->sentence()],
            ['name' => 'Beef Curry', 'price' => 14.99, 'category_id' => 1, 'description' => fake()->sentence()],
            ['name' => 'Pakora', 'price' => 6.99, 'category_id' => 2, 'description' => fake()->sentence()],
            ['name' => 'Samosa', 'price' => 5.99, 'category_id' => 2, 'description' => fake()->sentence()],
            ['name' => 'Naan', 'price' => 2.99, 'category_id' => 2, 'description' => fake()->sentence()],
            ['name' => 'Tandoori Chicken', 'price' => 16.99, 'category_id' => 3, 'description' => fake()->sentence()],
            ['name' => 'Biryani', 'price' => 18.99, 'category_id' => 3, 'description' => fake()->sentence()],
            ['name' => 'Butter Chicken', 'price' => 15.99, 'category_id' => 3, 'description' => fake()->sentence()],
            ['name' => 'Gulab Jamun', 'price' => 4.99, 'category_id' => 4, 'description' => fake()->sentence()],
            ['name' => 'Kheer', 'price' => 4.99, 'category_id' => 4, 'description' => fake()->sentence()],
            ['name' => 'Ras Malai', 'price' => 4.99, 'category_id' => 4, 'description' => fake()->sentence()],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
