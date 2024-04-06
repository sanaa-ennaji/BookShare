<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/payment', function () {
    return view('payment');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/stores/store', function () {
    return view('stores.store');
});

Route::get('/stores/profile', function () {
    return view('stores.profile');
});

Route::get('/StoreRegister', function () {
    return view('stores.StoreRegister');
});