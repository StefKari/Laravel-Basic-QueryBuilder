<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cruds;
use App\Models\Crud;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Cruds::class, 'index']);

Route::post('/done', [Cruds::class, 'store']);

Route::delete('/del/{id}', [Cruds::class, 'destroy']);

Route::get('/edit/{id}', [Cruds::class, 'edit']);

Route::put('/up/{id}', [Cruds::class, 'update']);

// Route::get('/','CrudController@index');

// Route::post('/done','CrudController@store');

// Route::delete('/del/{id}','CrudController@destroy');

// Route::get('/edit/{id}','CrudController@edit');

// Route::put('/up/{id}','CrudController@update');