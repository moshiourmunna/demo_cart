<?php

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

// Route::get('/', function () {
//     return view('products.list');
// });
Route::get('/product/detail', function () {
    return view('products.show');
});
Route::get('/', 'ProductController@index')->name('products.list');
Route::post('/product/addToCart/{product_id}', 'ProductController@addToCart')->name('products.addToCart');
Route::get('/product/cart', 'ProductController@cart')->name('products.cart');
Route::get('/product/detail/{id}', 'ProductController@show')->name('products.show');
// Route::post('/product/addToCart', 'ProductController@addToCart')->name('products.addToCart');
