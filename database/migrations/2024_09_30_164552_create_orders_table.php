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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); 
            $table->foreignId('restaurant_id')->constrained('restaurants')->onDelete('cascade'); 
            $table->enum('status', ['Pending', 'Accepted', 'Preparing', 'Completed', 'Rejected'])->default('Pending'); 
            $table->decimal('total_price', 8, 2); 
            $table->enum('payment_status', ['Paid', 'Unpaid'])->default('Unpaid'); 
            $table->enum('order_types', ['reservation', 'pay-in-cash','dine-in','cash-on-delivery'])->default('dine-in'); 
            $table->string('payment_method')->default('cash'); 
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
        Schema::dropIfExists('orders');
    }
};
