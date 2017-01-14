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

Route::get('/', 'StoreController@getIndex');

Route::get('/item/{number}', 'StoreController@getItem');

Route::post('/cart', 'StoreController@addToCart');

Route::get('/thanks', 'StoreController@getThanks');


Route::get('/iFrame', 'StoreController@tempFrame');
