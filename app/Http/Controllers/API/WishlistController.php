<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index($customerID)
    {
        $wishlist = Wishlist::where('customer_id', $customerID)->firstOrFail();
        $products = $wishlist->products;

        return $products;
    }
}
