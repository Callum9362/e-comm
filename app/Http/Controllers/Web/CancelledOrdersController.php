<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CancelledOrdersController extends Controller
{
    public function index()
    {
        return view('order.cancelled');
    }
}
