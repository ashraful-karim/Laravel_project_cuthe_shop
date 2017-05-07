<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','WelcomeController@index');
Route::get('fashion-product/{id}','WelcomeController@fashion_product');

Route::get('category/{id}','WelcomeController@category_page');
Route::get('product/{id}','WelcomeController@single_product_page');


Route::get('admin','AdminController@login');
Route::post('admin-login-check','AdminController@admin_login_check');


/*Add to cart routes*/

Route::match(['get','post'],'add_to_cart/{id}','CartController@add_to_cart');
Route::get('show_cart','CartController@show_cart');
Route::post('update_cart','CartController@update_cart');
Route::get('delete_to_cart/{id}','CartController@delete_to_cart');

Route::get('checkout_content','CheckoutController@checkout');

Route::post('save_customer','CheckoutController@save_customer');
Route::get('ajax_email_check/{id}','CheckoutController@ajax_email_check');
Route::get('shipping-address','CheckoutController@shipping_address');
Route::post('login','CheckoutController@user_login');

Route::get('user_logout','CheckoutController@user_logout');
Route::post('save_shipping','CheckoutController@save_shipping');
Route::get('payment','CheckoutController@get_payment_page');
Route::post('place-order','CheckoutController@place_order');




Route::get('dashboard','SuperAdminController@index');
Route::get('logout','SuperAdminController@logout');
Route::get('add_category','SuperAdminController@add_category');
Route::post('save_category','SuperAdminController@save_category');
Route::get('manage_category','SuperAdminController@manage_category');
Route::get('publish_category/{id}','SuperAdminController@publish_category');
Route::get('unpublish_category/{id}','SuperAdminController@unpublish_category');
Route::get('delete_category/{id}','SuperAdminController@delete_category');
Route::get('edit_category/{id}','SuperAdminController@edit_category');
Route::post('update_category','SuperAdminController@update_category');
/*brand routes*/
Route::get('add_brand','SuperAdminController@add_brand');
Route::post('save_brand','SuperAdminController@save_brand');
Route::get('manage_brand','SuperAdminController@manage_brand');
Route::get('unpublish_brand/{id}','SuperAdminController@unpublished_brand');
Route::get('publish_brand/{id}','SuperAdminController@published_brand');
Route::get('delete_brand/{id}','SuperAdminController@delete_brand');
Route::get('edit_brand/{id}','SuperAdminController@edit_brand');
Route::post('update_brand','SuperAdminController@update_brand');

/*Product routes*/
Route::get('add_product','SuperAdminController@add_product');
Route::post('save_product','SuperAdminController@save_product');
Route::get('manage_product','SuperAdminController@manage_product');
Route::get('unpublish_product/{id}','SuperAdminController@unpublish_product');
Route::get('publish_product/{id}','SuperAdminController@publish_product');
Route::get('delete_product/{id}','SuperAdminController@delete_product');

Route::get('edit_product/{id}','SuperAdminController@edit_product');
Route::post('update_product','SuperAdminController@update_product');

Route::get('manage_order','SuperAdminController@manage_order');
Route::get('edit_order/{id}','SuperAdminController@edit_order');
Route::post('update_order','SuperAdminController@update_order');
Route::get('delete_order/{id}','SuperAdminController@delete_order');



