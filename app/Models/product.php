<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\CartItem;

class product extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    // filter pencarian
    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('product', 'like', '%' . $filters['search'] . '%'); 
        }
    }

    // relasi ke table
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cartItem(){
        return $this->hasMany(CartItem::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
