<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'customer_id' => 1, // Customer ID
            'restaurant_id' => 1, // Tasty Foods
            'status' => 'Pending',
            'total_price' => 15.98,
            'payment_status' => 'Unpaid',
            'payment_method' => 'Stripe',
            'order_types' => 'dine-in',
        ]);

        Order::create([
            'customer_id' => 1, // Customer ID
            'restaurant_id' => 2, // Spicy Delights
            'status' => 'Accepted',
            'total_price' => 22.98,
            'payment_status' => 'Paid',
            'payment_method' => 'PayPal',
            'order_types' => 'dine-in',

        ]);
    }
}
