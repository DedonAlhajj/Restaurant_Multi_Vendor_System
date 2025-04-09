<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use App\Models\FoodItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;
    protected $table='restaurants';
    protected $gureded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function foodItems()
    {
        return $this->hasMany(FoodItem::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
