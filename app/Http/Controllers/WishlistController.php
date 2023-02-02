<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index($customerID)
    {
        $wishlist = Wishlist::where('customer_id', $customerID)->firstOrFail();
        $products = $wishlist->products;

        return $products;
    }
}
