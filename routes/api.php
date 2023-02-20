<?php

use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CouponController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\ShippingController;
use App\Http\Controllers\API\WishlistController;
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

// Customers
Route::prefix('customer')->group(function () {
    Route::get('/all', [CustomerController::class, 'index'])->name('customers');
    Route::post('/add', [CustomerController::class, 'store'])->name('add-customer');
    Route::post('/delete/{id}', [CustomerController::class, 'delete'])->name('delete-customer');
    Route::put('/update/{id}', [CustomerController::class, 'update'])->name('update-customer');
});

// Categories
Route::prefix('categories')->group(function () {
    Route::get('/all', [CategoryController::class, 'index'])->name('categories');
    Route::post('/add', [CategoryController::class, 'store'])->name('add-category');
    Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('delete-category');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update-category');
});


// Coupons
Route::prefix('coupons')->group(function () {
    Route::get('/all', [CouponController::class, 'index'])->name('coupons');
    Route::post('/add', [CouponController::class, 'store'])->name('add-coupon');
    Route::post('/coupon/delete/{id}', [CouponController::class, 'delete'])->name('delete-coupon');
    Route::put('/coupon/update/{id}', [CouponController::class, 'update'])->name('update-coupon');
});

// Products
Route::prefix('products')->group(function () {
    Route::get('/all', [ProductController::class, 'index'])->name('products');
    Route::post('/add', [ProductController::class, 'store'])->name('add-product');
    Route::post('/delete/{id}', [ProductController::class, 'delete'])->name('delete-product');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update-product');
});

// Wishlist
Route::prefix('wishlist')->group(function () {
    Route::get('/{customerID}', [WishlistController::class, 'index'])->name('wishlist');
});

// Reviews
Route::prefix('reviews')->group(function () {
    Route::get('/all', [ReviewController::class, 'index'])->name('reviews');
    Route::get('/{id}', [ReviewController::class, 'edit'])->name('view-review-by-id');
    Route::post('/add', [ReviewController::class, 'store'])->name('add-review');
    Route::put('/update/{id}', [ReviewController::class, 'update'])->name('update-review');
    Route::post('/delete/{id}', [ReviewController::class, 'delete'])->name('delete-review');
});

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
