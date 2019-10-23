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



//list cat
Route::get('/cats', 'CatController@index')->name('list-cat');
// create cat
Route::get('/cats/create', 'CatController@create');
//store cat
Route::post('/cats', 'CatController@store')->name('store-cat');
// cat detail
Route::get('/cats/{id}', 'CatController@show');
//update cat
Route::get('cats/{id}/update', 'CatController@update');

//delete cat
Route::get('/cats/{id}/delete', 'CatController@destroy');
