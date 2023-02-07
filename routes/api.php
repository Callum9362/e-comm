<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// TODO Refactor some of these route signatures

// Customers
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::post('/customer', [CustomerController::class, 'store'])->name('add-customer');
Route::post('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('delete-customer');
Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('update-customer');


// Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::post('/category', [CategoryController::class, 'store'])->name('add-category');
Route::post('/category/delete/{id}', [CategoryController::class, 'delete'])->name('delete-category');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('update-category');

// Coupons
Route::get('/coupons', [CouponController::class, 'index'])->name('coupons');
Route::post('/coupon', [CouponController::class, 'store'])->name('add-coupon');
Route::post('/coupon/delete/{id}', [CouponController::class, 'delete'])->name('delete-coupon');
Route::put('/coupon/update/{id}', [CouponController::class, 'update'])->name('update-coupon');

// Product
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/product', [ProductController::class, 'store'])->name('add-product');
Route::post('/product/delete/{id}', [ProductController::class, 'delete'])->name('delete-product');
Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('update-product');

// Wishlist
Route::get('/wishlist/{customerID}', [WishlistController::class, 'index'])->name('wishlist');

// Review
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::post('/review', [ReviewController::class, 'store'])->name('add-review');

// Addresses
Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');

// Payments
Route::get('/payments', [PaymentController::class, 'index'])->name('payments');

// Shippings
Route::get('/shippings', [ShippingController::class, 'index'])->name('shippings');

// Orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders');
