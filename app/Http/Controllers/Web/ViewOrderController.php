<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ViewOrderController extends Controller
{
    public function index($id)
    {
        $order = Order::find($id);

        if (!$order) {
            abort(404);
        }

        return view('order.details')
            ->with('order', $order);
    }
}
