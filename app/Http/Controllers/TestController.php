<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Room;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:add-permission_name|update-permission_name|view-permission_name|delete-permission_name', ['only' => ['index','store']]);
    //      $this->middleware('permission:add-permission_name', ['only' => ['create','store']]);
    //      $this->middleware('permission:view-permission_name', ['only' => ['show']]);
    //      $this->middleware('permission:update-permission_name', ['only' => ['edit','update']]);
    //      $this->middleware('permission:delete-permission_name', ['only' => ['destroy']]);
    // }
    //

    public function test()
    {
        $orderId = 1;
        return Order::getOrder($orderId);
    }
}
