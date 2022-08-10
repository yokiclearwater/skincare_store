<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect()->route('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('products', ProductController::class)->middleware(['auth', 'is_admin']);

Route::get('/skincare', [HomeController::class, 'SkinCare']);
Route::get('/about', [HomeController::class, 'About']);
Route::get('/contact', [HomeController::class, 'Contact']);

Route::get('search', [ProductController::class, 'Search'])->middleware('auth');
Route::get('detail/{id}', [CartController::class, 'Detail'])->name('cart.detail')->middleware('auth');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');
Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.store')->middleware('auth');
Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout')->middleware('auth');
Route::post('/cart/{id}/update', [CartController::class, 'update'])->name('cart.update')->middleware('auth');
Route::delete('/cart/{id}/delete', [CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');
Route::get('/cart/order_history', [CartController::class, 'order_history'])->name('cart.order_history')->middleware('auth');
