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
    return view('homepage')
    ;
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/detail', function () {
    return view('detail');
})->name('stock.detail');;

Route::get('/Product_detail', function () {
    return view('ProductDetail');
})->name('stock.Product_detail');;


Route::get('/toko', function () {
    return view('toko');
});

Route::get('/paymend', function(){
    return view('paymend');
});