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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route::get('product-type/{type}',[
    'as' => 'producttype',
    'uses' => 'PageController@getProductType'
]);

Route::get('/product-detail/{id}',[
    'as' => 'productdetail',
    'uses' => 'PageController@getProductDetail'
]);

Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'PageController@getContact'
]);

Route::get('/about',[
    'as' => 'about',
    'uses' => 'PageController@getAbout'
]);

Route::group([
    'prefix' => 'manage',
    'namespace' => 'Admin',
    'middleware' => 'manager'
], function() {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::resources([
        'products' => 'ProductController',
        'categories' => 'CategoryController',
        'orders' => 'OrderController',
    ]);
});

Route::get('add-to-cart/{id}', [
    'as' => 'themgiohang',
    'uses' => 'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}', [
    'as' => 'xoagiohang', 
    'uses' => 'PageController@getDelItemCart'
]);

Route::get('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@getCheckout'
]);

Route::post('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@postCheckout'
]);

Route::get('search', [
    'as' => 'search',
    'uses' => 'PageController@getSearch'
]);

Route::get('member',[
    'as' => 'member',
    'uses' => 'MemberController@index'
]);
