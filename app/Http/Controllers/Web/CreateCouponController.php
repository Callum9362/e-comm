<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCouponController extends Controller
{
    public function index()
    {
        return view('coupon.create');
    }
}
