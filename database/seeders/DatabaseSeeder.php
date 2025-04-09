<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\OrdersTableSeeder;
use Database\Seeders\CustomerTableSeeder;
use Database\Seeders\InvoicesTableSeeder;
use Database\Seeders\PaymentsTableSeeder;
use Database\Seeders\FoodItemsTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\OrderItemsTableSeeder;
use Database\Seeders\RestaurantsTableSeeder;
use Database\Seeders\NotificationsTableSeeder;
use Database\Seeders\SubcategoriesTableSeeder;
use Database\Seeders\RatingsAndCommentsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     ['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('password')],
        // ]);
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'Seller']);

        // $admin = User::where('email', 'admin@gmail.com')->first();

        // if ($admin) {
        //     $admin->assignRole('Admin');
        // };
        $this->call([
            UsersTableSeeder::class,
        RestaurantsTableSeeder::class,
        CategoriesTableSeeder::class,
        SubcategoriesTableSeeder::class,
        FoodItemsTableSeeder::class,
        CustomerTableSeeder::class,
        OrdersTableSeeder::class,
        OrderItemsTableSeeder::class,
        InvoicesTableSeeder::class,
        RatingsAndCommentsTableSeeder::class,
        //NotificationsTableSeeder::class,
        PaymentsTableSeeder::class,
        ]);

    }
}
