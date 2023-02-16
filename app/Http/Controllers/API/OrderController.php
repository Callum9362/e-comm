<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function edit($id, Request $request)
    {
        $order = Order::find($id);
        if(!$order)
        {
            return response()->json(['error', 'Order was not found'], 404);
        }

        return response()->json(['msg' => 'Order found!', 'data' => $order], 201);
    }
}
