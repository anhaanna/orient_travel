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


Route::get('/error', 'PagesController@error');

Route::get('/{lang}', 'PagesController@index');
Route::get('/', 'PagesController@index');
Route::post('/htmlmail','PagesController@htmlmail');



Route::get('/{locale}', 'PagesController@setSession');

Route::get('/{locale}/{country}', 'PagesController@getCountry');
Route::post('/{locale}/{country}', 'PagesController@getCountry');







