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
Route::get('/privacy-policy', 'PageController@privacyPolicy');
Route::get('/terms-and-conditions', 'PageController@termsAndConditions');
Route::get('/careers', 'PageController@careers');
Route::get('/test', 'PageController@test');
Route::get('/confirmation', 'PageController@confirmation')->name('confirmation');
Route::get('/language/{code}', 'PageController@getLanguage')->name('language');


// Authentication
Auth::routes();

// Localization
Route::get('lang/{locale}', 'LocalizationController@index');

// User home page
Route::get('/home', 'HomeController@index')->name('home');

// Products
Route::resource('/products', 'ProductController');

// Cart
Route::resource('/cart', 'CartController');

// Empty cart
Route::get('/empty', function() {
	\Cart::clear();
});

// Show cart contents
Route::get('/showcart', function() {
	dd(\Cart::getContent());
});

// Checkout
Route::resource('/checkout', 'CheckoutController');
Route::get('/checkout-shipping/{order}', 'CheckoutController@showShippingForm')->name('checkout.shipping');
Route::post('/checkout-shipping', 'CheckoutController@storeShippingAddress')->name('checkout.storeShippingAddress');
Route::get('/checkout-review/{order}', 'CheckoutController@showReview')->name('checkout.review');
Route::post('/complete-order', 'CheckoutController@completeOrder')->name('checkout.complete');

// Coupon
Route::resource('/coupon', 'CouponController');
Route::post('/coupon-cart', 'CouponController@storeFromCart')->name('coupon.storeFromCart');
Route::delete('/coupon-cart', 'CouponController@destroyFromCart')->name('coupon.destroyFromCart');