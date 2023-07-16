<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::controller(CartController::class)->group(function () {
        Route::get('keranjang', 'index');
    });
});
