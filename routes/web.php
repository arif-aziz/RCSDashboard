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

Route::get('/', 'AuthController@index');
Route::post('auth', 'AuthController@store');

Route::get('dashboard', 'DashboardController@index');

Route::get('raw', 'RawController@index');
Route::post('raw', 'RawController@store');
Route::get('raw/download/{format}', 'RawController@download');

Route::get('chart', 'ChartController@index');
Route::get('chart/show/{name}', 'ChartController@show');