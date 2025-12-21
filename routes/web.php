<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', [ShopController::class, 'catalog'])->name('catalog');
Route::get('/gift', [ShopController::class, 'gift'])->name('gift');
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
Route::post('/order', [ShopController::class, 'storeOrder'])->name('order.store');
Route::get('/employee', [ShopController::class, 'employee'])->name('employee');

Route::get('/', [App\Http\Controllers\ShopController::class, 'catalog'])->name('catalog');

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\GiftPackController;

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-items', OrderItemController::class);
Route::resource('gift-packs', GiftPackController::class);

Route::post('/cart/add/{product}', [ShopController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [ShopController::class, 'viewCart'])->name('cart.view');
