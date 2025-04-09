<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodItem;

class FoodItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        FoodItem::create([
            'subcategory_id' => 1, // Salads
            'restaurant_id' => 1,  // Tasty Foods
            'name' => 'Caesar Salad',
            'description' => 'Fresh romaine lettuce with Caesar dressing and croutons.',
            'price' => 5.99,
            'image' => 'caesar_salad.jpg',
        ]);

        FoodItem::create([
            'subcategory_id' => 2, // Soups
            'restaurant_id' => 1,  // Tasty Foods
            'name' => 'Tomato Soup',
            'description' => 'Rich tomato soup with basil and cream.',
            'price' => 3.99,
            'image' => 'tomato_soup.jpg',
        ]);

        FoodItem::create([
            'subcategory_id' => 3, // Pasta
            'restaurant_id' => 2,  // Spicy Delights
            'name' => 'Spaghetti Carbonara',
            'description' => 'Classic Italian pasta with bacon, eggs, and Parmesan cheese.',
            'price' => 9.99,
            'image' => 'spaghetti_carbonara.jpg',
        ]);

        FoodItem::create([
            'subcategory_id' => 4, // Grills
            'restaurant_id' => 2,  // Spicy Delights
            'name' => 'Grilled Chicken',
            'description' => 'Succulent grilled chicken with herbs and spices.',
            'price' => 12.99,
            'image' => 'grilled_chicken.jpg',
        ]);
    }
}


