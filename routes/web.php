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

Route::get('/', 'DashboardController@index');

Route::get('/api/crypto/{id}/current','CryptoCurrencyListController@getCurrentPrice');

Route::get('/crypto','CryptoCurrencyListController@index');
Route::get('/crypto/{id}','CryptoCurrencyListController@show');

//Route::post('/api/crypto/{id}/current','CryptoCurrencyListController@getCurrentPrice');