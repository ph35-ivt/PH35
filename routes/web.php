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
Route::delete('/cats/{id}', 'CatController@destroy')->name('delete-cat');
//restore cat
Route::post('/cats/{id}', 'CatController@restore')->name('restore-cat');
//force delete cat
Route::delete('/cats/{id}/force-delete', 'CatController@forceDelete')->name('force-delete-cat');
//get all comment of post
Route::get('/posts/{id}/comments' , 'PostController@listComment');
//list post of country
Route::get('/countries/{id}/posts', 'CountryController@listPost');

//Create user
Route::get('/users/create', 'UserController@create')->name('create-user');
//store user
Route::post('/users', 'UserController@store')->name('store-user');