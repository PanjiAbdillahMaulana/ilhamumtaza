<?php

use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdminCategoryController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardProductsController;
use App\Http\Controllers\productController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;

use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "page" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "page" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "page" => "Contact"
    ]);
});

Route::get('/profile', function () {
    return view('users/profile',[
        "page" => "profile",
        "name" => "Panji Abdillah Maulana",
        "email"=> "panji@gmail.com",
        "image"=> "panji.jpg"
    ]);
})->middleware('auth');

Route::get('/products', [productController::class, 'index']);
// ('products/{product:slug} route model binding
Route::get('/products/{product:slug}',[productController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'page' => 'Product Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('products',[
        'page' => "Produk dengan kategori : $category->name",
        // lazy eager loading biar tidak terkena n+1 problem
        'products' => $category->product->load('user', 'category')
        
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [AdminAuth::class, 'index']);

Route::resource('/dashboard/products', DashboardProductsController::class);

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');

Route::post('/cart/{id}',[CartController::class, 'store'])->middleware('auth');
Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->middleware('auth');

// Route::resource('/dashboard/admin', AdminController::class);


