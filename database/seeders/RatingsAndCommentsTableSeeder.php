<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RatingAndComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RatingsAndCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RatingAndComment::create([
            'food_item_id' => 1, // Caesar Salad
            'customer_id' => 1, // Customer
            'rating' => 4,
            'comment' => 'Very fresh and tasty!',
        ]);

        RatingAndComment::create([
            'food_item_id' => 3, // Spaghetti Carbonara
            'customer_id' => 1, // Customer
            'rating' => 5,
            'comment' => 'Authentic taste!',
        ]);
    }
}
