<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderItem::create([
            'order_id' => 1, // First order
            'food_item_id' => 1, // Caesar Salad
            'quantity' => 1,
            'price' => 5.99,
        ]);

        OrderItem::create([
            'order_id' => 1, // First order
            'food_item_id' => 2, // Tomato Soup
            'quantity' => 1,
            'price' => 3.99,
        ]);

        OrderItem::create([
            'order_id' => 2, // Second order
            'food_item_id' => 3, // Spaghetti Carbonara
            'quantity' => 1,
            'price' => 9.99,
        ]);

        OrderItem::create([
            'order_id' => 2, // Second order
            'food_item_id' => 4, // Grilled Chicken
            'quantity' => 1,
            'price' => 12.99,
        ]);
    }
}
