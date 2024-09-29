<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('registerPost');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('loginPost');


Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
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

Route::get('/', function () {
    return view('layout/home');
});

Route::get('/login',[App\Http\Controllers\HomeController::class, 'login'])-> name('login');
Route::get('/register',[App\Http\Controllers\HomeController::class, 'register'])-> name('register');
Route::get('/blogarchive1',[App\Http\Controllers\HomeController::class, 'blogarchive1'])-> name('blogarchive1');
Route::get('/blogarchive2',[App\Http\Controllers\HomeController::class, 'blogarchive2'])-> name('blogarchive2');
Route::get('/blogsingle',[App\Http\Controllers\HomeController::class, 'blogsingle'])-> name('blogsingle');

Route::get('/cart',[App\Http\Controllers\HomeController::class, 'cart'])-> name('cart');
Route::get('/checkout',[App\Http\Controllers\HomeController::class, 'checkout'])-> name('checkout');
Route::get('/wishlist',[App\Http\Controllers\HomeController::class, 'wishlist'])-> name('wishlist');
Route::get('/product',[App\Http\Controllers\HomeController::class, 'product'])-> name('product');
Route::get('/productdetail',[App\Http\Controllers\HomeController::class, 'productdetail'])-> name('productdetail');
Route::get('/404page',[App\Http\Controllers\HomeController::class, 'errorpage'])-> name('errorpage');
// File routes/web.php
Route::get('/homepage',[App\Http\Controllers\HomeController::class, 'home'])-> name('home');

Route::get('/product-page', [ProductController::class, 'showProductPage'])->name('product');
Route::get('/myaccount',[App\Http\Controllers\HomeController::class, 'myaccount'])-> name('myaccount');
Route::post('/myaccount',[App\Http\Controllers\HomeController::class, 'myaccountpost'])-> name('myaccountpost');

