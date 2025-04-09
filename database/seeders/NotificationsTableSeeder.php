<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Notification::create([
            'user_id' => 2, // Restaurant owner
            'message' => 'New order received.',
            'type' => 'New Order',
            'status' => 'Unread',]);
    }
}
