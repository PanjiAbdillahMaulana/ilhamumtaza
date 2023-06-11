<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use App\Models\CartItem;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();
        $cartItems = CartItem::where('cart_id', $cart->id)->get();
        $page = 'cart';

        return view('cart',compact('cart', 'cartItems',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id){
        $product = product::where('id', $id)->first();
        // cek validasi
        $cek_keranjang = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();

        // simpan ke data base cart
        if(empty($cek_keranjang)){
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->status = 0;
            $cart->total = 0;
            $cart->save();
        }

        // simpan ke data base cart-item
        $pesanan_baru = Cart::where('user_id', auth()->user()->id)->where('status', 0)->first();

        // cek redudansi produk di cart
        $cek_cartItems = CartItem::where('product_id', $product->id)->where('cart_id', $pesanan_baru->id)->first();
        if(empty($cek_cartItems)){
            $cartItems = new CartItem;
            $cartItems->product_id = $product->id;
            $cartItems->cart_id = $pesanan_baru->id;
            $cartItems->quantity = $request->quantity;
            $cartItems->save();
        }else{
            $cartItems = CartItem::where('product_id', $product->id)->where('cart_id', $pesanan_baru->id)->first(); 
            $cartItems->cart_id = $pesanan_baru->id;
            $cartItems->quantity = $cartItems->quantity+$request->quantity;
            $cartItems->update();
        }
        
        return redirect('/products/'.$product->slug)->with('status' , 'Berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cartItem = CartItem::where('id',$id)->first();
        $cartItem->delete();

        return redirect('/cart')->with('success' , 'Berhasil dihapus');
    }
}
