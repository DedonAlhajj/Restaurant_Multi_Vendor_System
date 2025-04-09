<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password'), // Encrypt the password
        ]);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Seller']);
        $admin = User::where('email', 'admin1@gmail.com')->first();

        if ($admin) {
            $admin->assignRole('Admin');
        };
        User::create([
            'name' => 'Restaurant Owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
        ]);


    }
}
