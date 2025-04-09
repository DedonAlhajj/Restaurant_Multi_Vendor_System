<?php

namespace App\Models;

use App\Models\Restaurant;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $gureded=[];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
