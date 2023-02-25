<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;

class AllOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.all')
            ->with('orders', $orders);
    }
}
