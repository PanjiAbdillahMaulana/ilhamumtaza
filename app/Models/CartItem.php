<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\product;
use App\Models\Cart;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
    ];

    public function product(){
        return $this->belongsTo(product::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
