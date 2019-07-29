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
//fontend.......................
Route::get('/','HomeController@index');
//show service by vendor............
Route::get('/vendor_by_service/{service_id}','HomeController@show_vendor_by_service');
Route::get('/view_vendor/{vendor_id}','HomeController@vendor_details_by_id');

//cart route are here
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show_cart','CartController@show_cart');

//checkout routes are here
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer_registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');


//customer login and logout....................................
Route::post('/customer_login','CheckoutController@customer_login');
Route::get('/customer_logout','CheckoutController@customer_logout');
//payment routes are here.......................
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');

//manage order routes are here..........................
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');



//backend.......................
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');


//Service............................
Route::get('/add-service','ServiceController@index');
Route::get('/all-service','ServiceController@all_service');
Route::post('/save-service','ServiceController@save_service');
Route::get('/edit-service/{service_id}','ServiceController@edit_service');
Route::post('/update-service/{service_id}','ServiceController@update_service');
Route::get('/delete-service/{service_id}','ServiceController@delete_service');
Route::get('/unactive-service/{service_id}','ServiceController@unactive_service');
Route::get('/active-service/{service_id}','ServiceController@active_service');


//vendor routes are here..............
Route::get('/add-vendor','VendorController@index');
Route::post('/save-vendor','VendorController@save_vendor');
Route::get('/all-vendor','VendorController@all_vendor');
Route::get('/unactive-vendor/{vendor_id}','VendorController@unactive_vendor');
Route::get('/active-vendor/{vendor_id}','VendorController@active_vendor');
Route::get('/delete-vendor/{vendor_id}','VendorController@delete_vendor');
Route::get('/edit-vendor/{vendor_id}','VendorController@edit_vendor');


//slider route are here............
Route::get('/add-slider','SliderController@index');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/all-slider','SliderController@all_slider');
Route::get('/unactive-slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active-slider/{slider_id}','SliderController@active_slider');
Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');



