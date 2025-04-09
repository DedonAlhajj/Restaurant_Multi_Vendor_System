<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['food_item_id', 'customer_id'];

    // علاقة مع موديل الطعام
    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }

    // علاقة مع موديل الزبائن
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
