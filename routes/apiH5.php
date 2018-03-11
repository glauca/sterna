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

Route::get('/', function () {
    return 'h5';
});

//====================================================================== 店铺
//============================================================ 店铺列表
Route::get('/shops/', 'ShopController@index');
//============================================================ 店铺详情
Route::get('/shop/{id}/', 'ShopController@show');
//============================================================ 商家商品列表
Route::get('/shop/{id}/items/', 'ShopController@item');

//====================================================================== 商品
//============================================================ 商品列表
Route::get('/items/', 'ItemController@index');
//============================================================ 商品详情
Route::get('/item/{id}/', 'ItemController@show');
