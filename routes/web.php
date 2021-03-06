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
Route::get('/equipments', 'EquipmentsController@index');
	Route::get('/equipments/add', 'EquipmentsController@create');
	Route::post('/equipments/store', 'EquipmentsController@store');
	Route::get('/equipments/{equipment}/edit', 'EquipmentsController@edit');
	Route::post('/equipments/{equipment}/update', 'EquipmentsController@update');
	Route::get('/equipments/{equipment}/delete', 'EquipmentsController@destroy');
