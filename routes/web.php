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
    return view('welcome');
});

Route::get('/Product', 'ProductController@index');
Route::get('/Product/Add', 'ProductController@create');
Route::post('/Product/Store', 'ProductController@store');
Route::get('/Product/Edit/{id}', 'ProductController@edit');
Route::post('/Product/Update/{id}', 'ProductController@update');
Route::get('/Product/Delete/{id}', 'ProductController@destroy');
