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
    Route::post('/add', [CustomerController::class, 'store'])->middleware('throttle:60,1')->name('add-customer');
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
Route::prefix('address')->group(function () {
    Route::get('/all', [AddressController::class, 'index'])->name('addresses');
    Route::get('/{id}', [AddressController::class, 'edit'])->name('view-address-by-id');
    Route::post('/add', [AddressController::class, 'store'])->name('add-address');
    Route::put('/update/{id}', [AddressController::class, 'update'])->name('update-address');
    Route::post('/delete/{id}', [AddressController::class, 'delete'])->name('delete-address');
});

// Shipping
Route::prefix('shipping')->group(function () {
    Route::get('/all', [ShippingController::class, 'index'])->name('get-all-shipping');
    Route::get('/{id}', [ShippingController::class, 'edit'])->name('view-shipping-by-id');
    Route::post('/add', [ShippingController::class, 'store'])->name('add-shipping');
    Route::put('/update/{id}', [ShippingController::class, 'update'])->name('update-shipping');
    Route::post('/delete/{id}', [ShippingController::class, 'delete'])->name('delete-shipping');
});

// Orders
Route::prefix('order')->group(function () {
    Route::get('/all', [OrderController::class, 'index'])->name('orders');
    Route::get('/{id}', [OrderController::class, 'edit'])->name('view-order-by-id');
    Route::post('/add', [OrderController::class, 'store'])->middleware('throttle:60,1')->name('add-order');
    Route::put('/update/{id}', [OrderController::class, 'update'])->name('update-order');
    Route::post('/delete/{id}', [OrderController::class, 'delete'])->name('delete-order');
});

// Payments
Route::prefix('payments')->group(function () {
    Route::get('/all', [PaymentController::class, 'index'])->name('payments');
});

