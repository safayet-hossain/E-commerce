<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ShippingController;


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
//dashboard
 Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
 
//product
 Route::get('/product',[ProductController::class,'product'])->name('product'); 
 Route::get('/add_product',[ProductController::class,'add_product'])->name('add.product');
 Route::post('/product_store',[ProductController::class,'store'])->name('product_store'); 


//category
 Route::get('/category',[CategoryController::class,'category'])->name('category');
//payment
 Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
//customer
 Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
 Route::get('/customerinfo',[CustomerController::class,'customerinfo'])->name('customerinfo'); 
 Route::post('/customer_store',[CustomerController::class,'store'])->name('customer.store');

//order

 Route::get('/order',[OrderController::class,'Order'])->name('order');
//cart
 Route::get('/cart',[CartController::class,'cart'])->name('cart');

 //wishlist
 Route::get('/wishlist',[WishlistController::class,'wishlist'])->name('wishlist');
 //shipping
 Route::get('/shipping',[ShippingController::class,'shipping'])->name('shipping');
