<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use \Darryldecode\Cart\Facades\CartFacade as Cart;


//register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
//login
Route::get('/login', [LoginController::class, 'create'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
//logout
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');


Route::get('/', [HomeController::class, 'index']);

Route::get('/products/{category}', [ProductController::class, 'index']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::get('/cart', [ProductController::class, 'cartList'])->name('cart.list')->middleware('auth');
Route::post('/cart', [ProductController::class, 'addToCart'])->name('cart.store')->middleware('auth');;


Route::get('/all-orders', [OrderController::class, 'index'])->name('orders.index')->middleware('auth');
Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show')->middleware('auth');
Route::get('/orders', [OrderController::class, 'create'])->name('orders.create')->middleware('auth');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store')->middleware('auth');
Route::get('/payment/{order}', [OrderController::class, 'edit'])->name('orders.edit')->middleware('auth');
Route::post('/payment/{order}', [OrderController::class, 'update'])->name('orders.update')->middleware('auth');
