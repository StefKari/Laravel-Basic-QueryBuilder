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

Route::get('/','CrudController@index');

Route::post('/done','CrudController@store');

Route::delete('/del/{id}','CrudController@destroy');

Route::get('/edit/{id}','CrudController@edit');

Route::put('/up/{id}','CrudController@update');
