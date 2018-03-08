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
//============================================================ 店铺
Route::get('/shop/{id}/', 'ShopController@show');
//============================================================ 商家商品列表
Route::get('/shop/{id}/goods/', 'ShopController@goods');
