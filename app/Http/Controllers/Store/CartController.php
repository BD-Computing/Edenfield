<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cart()
    {
        return view('store.checkout.cart');
    }
    public function checkout()
    {
        return view('store.checkout.checkout');
    }
    public function pay($order)
    {
        return view('store.checkout.pay', compact('order'));
    }
}