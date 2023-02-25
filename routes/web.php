<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\AllOrdersController;
use App\Http\Controllers\Web\DashboardController;
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

Route::prefix('order')->group(function () {
    Route::get('/all', [AllOrdersController::class, 'index'])->name('all-orders');
    Route::get('/{id}', [ViewOrderController::class, 'index'])->name('order-details');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
