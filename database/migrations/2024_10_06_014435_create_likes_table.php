<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id(); // المفتاح الأساسي
            $table->foreignId('food_item_id')->constrained('food_items')->onDelete('cascade'); // الربط مع جدول الطعام
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade'); // الربط مع جدول الزبائن
            $table->timestamps(); // الوقت الذي تم فيه إضافة أو إزالة اللايك
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
