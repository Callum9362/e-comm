<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\AllOrdersController;
use App\Http\Controllers\Web\CancelledOrdersController;
use App\Http\Controllers\Web\CreateCouponController;
use App\Http\Controllers\Web\CustomerDashboardController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\ExpiredCouponController;
use App\Http\Controllers\Web\FlaggedReviewsController;
use App\Http\Controllers\Web\ViewOrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('order')->middleware('auth')->group(function () {
    Route::get('/all', [AllOrdersController::class, 'index'])->name('all-orders');
    Route::get('/{id}', [ViewOrderController::class, 'index'])->name('order-details');
});

Route::get('/cancelled', [CancelledOrdersController::class, 'index'])->name('cancelled');

Route::prefix('reviews')->middleware('auth')->group(function () {
    Route::get('/flagged', [FlaggedReviewsController::class, 'index'])->name('flagged');
    Route::get('/flagged/{id}', [FlaggedReviewsController::class, 'edit'])->name('flagged-details');
});


Route::prefix('customers')->middleware('auth')->group(function () {
    Route::get('/{id}', [CustomerDashboardController::class, 'index'])->name('customer-id');
});

Route::prefix('coupons')->middleware('auth')->group(function () {
    Route::get('/new', [CreateCouponController::class, 'index'])->name('create-coupon');
    Route::get('/expired', [ExpiredCouponController::class, 'index'])->name('expired-coupons');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
