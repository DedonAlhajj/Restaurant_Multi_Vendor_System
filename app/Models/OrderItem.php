<?php

namespace App\Models;

use App\Models\Order;
use App\Models\FoodItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
    use HasFactory;
    protected $table='order_items';
    protected $fillable=['order_id','food_item_id','quantity','price'];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function foodItem()
    {
        return $this->belongsTo(FoodItem::class);
    }
}
