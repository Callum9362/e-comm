<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpiredCouponController extends Controller
{
    public function index()
    {
        $coupons = DB::table('coupons')
            ->where('end_date', '<', date('Y-m-d'))
            ->paginate(5);

       return view('coupon.expired')
           ->with('coupons', $coupons);
    }
}
