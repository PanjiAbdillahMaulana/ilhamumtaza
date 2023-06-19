<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.products.index',[
            'products' => product::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request){
        $validatedData = $request->validate([
            'product' => 'required|max:255',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif,avif,webp',
            'detail' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0'
        ]);

        $validatedData['image'] = $request->file('image')->store('product-images');


        $validatedData['user_id'] = auth()->user()->id;
        product::create($validatedData);
        
        return redirect('/dashboard/products')->with('success', 'New product has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('dashboard.products.show',[
            'product' => $product
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view('dashboard.products.edit',[
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $rules =([
            'product' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif,avif,webp',
            'detail' => 'required',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0'
        ]);

        if($request->slug != $product->slug){
            $rules['slug'] = 'required|unique:products';
        }
        
        $validatedData = $request->validate($rules);

        if($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('product-images');

        $validatedData['user_id'] = auth()->user()->id;
        product::where('id', $product->id)->update($validatedData);
        
        return redirect('/dashboard/products')->with('success', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        if($product->image){
            Storage::delete($product->image);
        }
        product::destroy($product->id);
        return redirect('/dashboard/products')->with('success', 'Product has been deleted!');
    }
}
