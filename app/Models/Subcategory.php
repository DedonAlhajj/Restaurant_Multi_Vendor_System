<?php

namespace App\Models;

use App\Models\Category;
use App\Models\FoodItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;  
    protected $gureded=[];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function foodItems()
    {
        return $this->hasMany(FoodItem::class);
    }
}
