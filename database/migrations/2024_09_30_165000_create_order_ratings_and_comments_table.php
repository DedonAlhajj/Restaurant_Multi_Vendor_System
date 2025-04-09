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
        Schema::create('order_ratings_and_comments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('food_item_id')->constrained('food_items')->onDelete('cascade'); // Foreign key to food items
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // Foreign key to users
            $table->tinyInteger('rating')->nullable(); // Rating (1 to 5 stars)
            $table->text('comment')->nullable(); // Comment
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
        Schema::dropIfExists('order_ratings_and_comments');
    }
};
