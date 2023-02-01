<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
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
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::post('/customer', [CustomerController::class, 'store'])->name('add-customer');
Route::post('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('delete-customer');
Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('update-customer');


// Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::post('/category', [CategoryController::class, 'store'])->name('add-category');
Route::post('/category/delete/{id}', [CategoryController::class, 'delete'])->name('delete-category');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('update-category');
