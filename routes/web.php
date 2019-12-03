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
Route::get('/autor/{id}','AutorController@show');
Route::post('/autor','AutorController@store');
Route::put('/autor/{id}','AutorController@update');
Route::delete('/autor/{id}','AutorController@destroy');

Route::get('/genre','GenreController@index');
Route::get('/genre/{id}','GenreController@show');
Route::post('/genre','GenreController@store');
Route::put('/genre/{id}','GenreController@update');
Route::delete('/genre/{id}','GenreController@destroy');

Route::get('/publisher','PublisherController@index');
Route::get('/publisher/{id}','PublisherController@show');
Route::post('/publisher','PublisherController@store');
Route::put('/publisher/{id}','PublisherController@update');
Route::delete('/publisher/{id}','PublisherController@destroy');

Route::get('/book','BookController@index');
Route::get('/book/{id}','BookController@show');
Route::post('/book','BookController@store');
Route::put('/book/{id}','BookController@update');
Route::delete('/book/{id}','BookController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
