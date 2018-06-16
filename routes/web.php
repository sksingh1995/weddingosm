<?php

Route::get('/', 'HomeController@welcome')->name('home');

Route::get('vendors', 'VendorController@vendors')->name('vendor.all');
Route::get('vendor', 'VendorController@vendorDetail')->name('vendor.detail');

Route::get('customer/login', 'AuthController@customerLogin')->name('customer.login');
Route::get('customer/register', 'AuthController@customerRegister')->name('customer.register');

Route::get('blogs', 'BlogController@blogs')->name('blogs');

Route::get('cart', 'CartController@index')->name('cart');
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::get('checkout/thank-you', 'CheckoutController@checkoutThankYou')->name('checkout.thanks');

Route::get('wishlist', 'WishListController@index')->name('wishlist');

Route::get('about-us', 'StaticPagesController@aboutUs')->name('about');
Route::get('gallery', 'StaticPagesController@gallery')->name('gallery');
Route::get('contact-us', 'StaticPagesController@contactUs')->name('contact');
Route::get('gallery', 'StaticPagesController@gallery')->name('gallery');