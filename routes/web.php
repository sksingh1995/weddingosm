<?php

Route::view('test', 'dashboard.dashboard_layout');

Route::get('/', 'HomeController@welcome')->name('home');

Route::get('gallery-upload-finish', 'AuthController@galleryUploadFinish');

Route::post('check-email-exists', 'MixController@checkEmailExists')->name('vendor.all');

Route::get('vendors', 'VendorController@vendors')->name('vendor.all');

Route::get('vendor', 'VendorController@vendorDetail')->name('vendor.detail');

Route::get('vendor/register', 'AuthController@vendorRegister')->name('vendor.register');

Route::post('vendor/register', 'AuthController@vendorPostRegister');


Route::get('vendor/email-verificaion/{token}', 'AuthController@vendorEmailVerification')->name('vendor.email_verification');

Route::post('vendor/register/post-faq', 'AuthController@vendorPostFaq');

Route::get('vendor/register/photo-gallery/{token}', 'AuthController@vendorPhotoGallery')->name('vendor.register.photo-gallery');
Route::post('vendor/register/photo-gallery', 'AuthController@saveVendorPhotoGallery')->name('vendor.register.post_gallery');


Route::get('customer/register', 'AuthController@customerRegister')->name('customer.register');
Route::post('customer/register', 'AuthController@postCustomerRegister');

Route::get('customer/email-verificaion/{token}', 'AuthController@customerEmailVerification')->name('customer.email_verification');

Route::get('login', 'AuthController@login')->name('login');
Route::post('login', 'AuthController@postLogin');

Route::post('send-reset-password-link', 'AuthController@sendResetPasswordLink');
Route::get('reset-password/{token}', 'AuthController@resetPassword')->name('password.reset');

Route::post('reset-password', 'AuthController@postResetPassword');

Route::get('blogs', 'BlogController@blogs')->name('blogs');

Route::get('cart', 'CartController@index')->name('cart');
Route::get('checkout', 'CheckoutController@index')->name('checkout');
Route::get('checkout/thank-you', 'CheckoutController@checkoutThankYou')->name('checkout.thanks');

Route::get('wishlist', 'WishListController@index')->name('wishlist');

Route::get('about-us', 'StaticPagesController@aboutUs')->name('about');
Route::get('gallery', 'StaticPagesController@gallery')->name('gallery');
Route::get('contact-us', 'StaticPagesController@contactUs')->name('contact');
Route::get('shopping', 'StaticPagesController@shopping')->name('shopping');
Route::get('shopping-list', 'StaticPagesController@shoppinglist')->name('shoppinglist');