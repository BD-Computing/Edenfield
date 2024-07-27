<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ClientOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::getOrdersByClient(auth()->user()->id);
        return view('client.orders.index', compact('orders'));
    }


    public function view($id)
    {
        $orderQuery = Order::getOrder($id);
        $order = $orderQuery['order'];
        $items = $orderQuery['items'];
        return view('client.orders.view', compact('order', 'items'));
    }
}
