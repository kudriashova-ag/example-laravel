<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('contacts', [MainController::class, 'sendEmail'])->name('sendEmail');
Route::get('/category/{category:slug}', [ShopController::class, 'category'])->name('category');

Route::get('/product/{product:slug}', [ShopController::class, 'product'])->name('product');

Route::post('cart/store', [CartController::class, 'store']);

Route::post('pay', [MainController::class, 'pay']);



Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});

Auth::routes();


