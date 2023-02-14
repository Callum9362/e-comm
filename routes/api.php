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
Route::get('/review/{id}', [ReviewController::class, 'edit'])->name('view-review-by-id');
Route::post('/review', [ReviewController::class, 'store'])->name('add-review');
Route::put('/review/update/{id}', [ReviewController::class, 'update'])->name('update-review');
Route::post('/review/{id}', [ReviewController::class, 'delete'])->name('delete-review');

// Addresses
Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');
Route::get('/address/{id}', [AddressController::class, 'edit'])->name('view-address-by-id');
Route::post('/address', [AddressController::class, 'store'])->name('add-address');
Route::put('/address/update/{id}', [AddressController::class, 'update'])->name('update-address');
Route::post('/address/{id}', [AddressController::class, 'delete'])->name('delete-address');

// Shippings
Route::get('/shippings', [ShippingController::class, 'index'])->name('get-all-shipping');
Route::get('/shipping/{id}', [ShippingController::class, 'edit'])->name('view-shipping-by-id');
Route::post('/shipping', [ShippingController::class, 'store'])->name('add-shipping');
Route::put('/shipping/update/{id}', [ShippingController::class, 'update'])->name('update-shipping');
Route::post('/shipping/{id}', [ShippingController::class, 'delete'])->name('delete-shipping');

// Orders
Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/order/{id}', [OrderController::class, 'edit'])->name('view-order-by-id');
Route::post('/order', [OrderController::class, 'store'])->name('add-order');
Route::put('/order/update/{id}', [OrderController::class, 'update'])->name('update-order');
Route::post('/order/{id}', [OrderController::class, 'delete'])->name('delete-order');

// Payments
Route::get('/payments', [PaymentController::class, 'index'])->name('payments');
