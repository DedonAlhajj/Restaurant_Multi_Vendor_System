<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users (Owner - Seller)
            $table->string('name'); // Restaurant name
            $table->string('logo')->nullable(); // Restaurant logo
            $table->string('cover_image')->nullable(); // Cover image
            $table->string('whatsapp_number')->nullable(); // WhatsApp number
            $table->string('phone_number')->nullable(); // Phone number
            $table->string('address')->nullable(); // Address
            $table->string('operating_hours')->nullable(); // Operating hours
            $table->string('slug')->unique(); // Unique slug for vendor URL
            $table->timestamps(); // Created at, Updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};
