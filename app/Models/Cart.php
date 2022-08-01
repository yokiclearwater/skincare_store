<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'cart_price',
        'user_id',
        'product_id',
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // order_detail
    public function order_details() {
        return $this->belongsTo(OrderDetail::class, 'order_num', 'order_num');
    }
}
