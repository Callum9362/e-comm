<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerDashboardController extends Controller
{
    public function index($id)
    {
        $customer = Customer::find($id);

        if (!$customer) {
            abort(404);
        }

        $wishlistItems = DB::table('wishlists')
            ->join('products', 'products.id', '=', 'wishlists.product_id')
            ->where('wishlists.customer_id', $id)
            ->select('wishlists.id', 'products.name', 'products.price')
            ->get();

        return view('customers.info')
            ->with('wishlistItems', $wishlistItems)
            ->with('customer', $customer);
    }
}
