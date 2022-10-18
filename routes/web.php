<?php

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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('homepage');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/service', [App\Http\Controllers\FrontendController::class, 'service'])->name('service');
Route::get('/books', [App\Http\Controllers\FrontendController::class, 'booksMedia'])->name('booksMedia');
Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/cart', [App\Http\Controllers\FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\FrontendController::class, 'checkout'])->name('checkout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//add to cart
Route::get('/addtocart/{productId}', [App\Http\Controllers\CartController::class, 'create'])->name('addtocart');
Route::get('/removeCart/{productId}', [App\Http\Controllers\CartController::class, 'destroy'])->name('removetocart');

