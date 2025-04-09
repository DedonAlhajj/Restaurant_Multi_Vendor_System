<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $table='order_invoices';
    protected $fillable=['order_id','invoice_number','pdf_path'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
