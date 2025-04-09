<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Customer;
use App\Models\OrderItem;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=['customer_id','restaurant_id','order_types','total_price','status' , 'payment_method','payment_status' ];



    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
