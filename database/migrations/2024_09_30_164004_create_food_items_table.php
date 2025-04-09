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
        Schema::create('food_items', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('subcategory_id')->constrained('subcategories')->onDelete('cascade'); 
            $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade'); 
            $table->string('name'); 
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2)->defualt(10); 
            $table->string('image')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_items');
    }
};
