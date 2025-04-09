<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategory::create(['category_id' => 1, 'name' => 'Salads']);  // Appetizers
        Subcategory::create(['category_id' => 1, 'name' => 'Soups']);  // Appetizers

        Subcategory::create(['category_id' => 2, 'name' => 'Pasta']);  // Main Courses
        Subcategory::create(['category_id' => 2, 'name' => 'Grills']); // Main Courses

        Subcategory::create(['category_id' => 3, 'name' => 'Cakes']);  // Desserts
        Subcategory::create(['category_id' => 3, 'name' => 'Ice Cream']); // Desserts

        Subcategory::create(['category_id' => 4, 'name' => 'Juices']); // Beverages
        Subcategory::create(['category_id' => 4, 'name' => 'Soda']);   // Beverages
    }
}
