<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product(){
        return $this->hasMany(product::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
