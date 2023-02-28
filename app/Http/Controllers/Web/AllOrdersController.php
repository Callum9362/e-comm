<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

class AllOrdersController extends Controller
{
    public function index()
    {
        $orders = Cache::remember(
            'orders.all.' . Request::get('page', 1), 60, function () {
            return Order::paginate(5);
        });

        return view('order.all')
            ->with('orders', $orders);
    }
}
