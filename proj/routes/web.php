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
Route::get('/autor','AutorController@index');
//Route::resourse('/autors', 'AutorController');
Route::get('/autor/{id}','AutorController@show');
Route::post('/autor','AutorController@store');
Route::put('/autor/{id}','AutorController@update');
Route::delete('/autor/{id}','AutorController@destroy');
