<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->level == 'admin') {
                return view('admin.dashboard.index');
            } elseif (auth()->user()->level == 'customer') {
                return view('customer.dashboard.index');
            }
        } else {
            return view('customer.dashboard.index');
        }
    }
}
