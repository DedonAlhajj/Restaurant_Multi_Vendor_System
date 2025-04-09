<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Appetizers']);
        Category::create(['name' => 'Main Courses']);
        Category::create(['name' => 'Desserts']);
        Category::create(['name' => 'Beverages']);
    }
}
