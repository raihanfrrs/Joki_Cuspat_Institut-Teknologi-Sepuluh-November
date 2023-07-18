<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(CartController::class)->group(function () {
        Route::get('keranjang', 'index');
        Route::get('keranjang/cart', 'cart_read');
        Route::get('keranjang/price', 'price_read');
        Route::get('keranjang/count', 'count_read');
        Route::put('keranjang/qty', 'qty_update');
    });
});
