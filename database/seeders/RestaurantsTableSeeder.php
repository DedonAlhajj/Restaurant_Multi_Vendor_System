<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'user_id' => 1, 
            'name' => 'Tasty Foods',
            'logo' => 'tasty_foods_logo.png',
            'cover_image' => 'tasty_foods_cover.jpg',
            'whatsapp_number' => '1234567890',
            'phone_number' => '0987654321',
            'address' => '123 Food Street, Flavor Town',
            'operating_hours' => '9 AM - 11 PM',
            'slug' => 'tasty-foods',
        ]);

        Restaurant::create([
            'user_id' => 1, // Another restaurant for the same owner
            'name' => 'Spicy Delights',
            'logo' => 'spicy_delights_logo.png',
            'cover_image' => 'spicy_delights_cover.jpg',
            'whatsapp_number' => '0987654321',
            'phone_number' => '1234567890',
            'address' => '456 Spice Avenue, Heat City',
            'operating_hours' => '10 AM - 10 PM',
            'slug' => 'spicy-delights',
        ]);
    
    }
}
