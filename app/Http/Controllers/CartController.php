<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TempCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view("customer.cart.index");
    }

    public function cart_read()
    {
        return view('customer.cart.data-cart-list')->with([
            'carts' => TempCart::where('customer_id', auth()->user()->customer->id)->get()
        ]);
    }

    public function price_read()
    {
        return view('customer.cart.data-cart-price')->with([
            'price' => TempCart::select(Product::raw('SUM(price * temp_carts.qty) as subtotal'), Product::raw('SUM(discount) as discount'))
                            ->join('custom_patterns', 'temp_carts.custom_pattern_id', '=', 'custom_patterns.id')
                            ->join('products', 'custom_patterns.product_id', '=', 'products.id')
                            ->where('temp_carts.customer_id', auth()->user()->customer->id)
                            ->first()
        ]);
    }

    public function count_read()
    {
        return view('components.data-ajax.data-cart-count')->with([
            'count' => TempCart::where('customer_id', auth()->user()->customer->id)->count()
        ]);
    }

    public function qty_update(Request $request)
    {
        TempCart::whereId($request->id)->update(['qty' => $request->qty]);
    }
}
