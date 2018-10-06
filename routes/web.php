<?php

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

// Pages
Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/test', 'PageController@test');

// Authentication
Auth::routes();

// User home page
Route::get('/home', 'HomeController@index')->name('home');

// Products
Route::resource('/products', 'ProductController');

// Cart
Route::resource('/cart', 'CartController');
