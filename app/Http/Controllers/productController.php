<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        // buat title pencarian
        $page= "All Products";
        if(request('search')){
            $page='Pencarian : '. request('search');
        }

        return view('products',[
            "page" => $page,
            'categories' => Category::all(),
            // eager load biar cuman 3 query ke databse biar dak lambat
            // paginate di akhir untuk fitur page biar tidak load banyak data
            "products" => product::with('user', 'category')->latest()->filter(request(['search']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(product $product){
        return view('product',[
            'page' => 'Product',
            'product' => $product
        ]);
    }
}
