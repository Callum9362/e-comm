<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CancelledOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::where('order_status', 'cancelled')->paginate(5);
        return view('order.cancelled')
            ->with('orders', $orders);
    }
}
