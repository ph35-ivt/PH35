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

Route::get('/', function(){
 return view('welcome');
});

Route::group([
			  'prefix' => 'admin',

], function(){
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
	//show form edit cat
	Route::get('/cats/{id}/edit', 'CatController@edit')->name('form-edit-cat');
	//update cat
	Route::put('/cats/{id}', 'CatController@update')->name('update-cat');

});

//get all comment of post
Route::get('/posts/{id}/comments' , 'PostController@listComment');
//list post of country
Route::get('/countries/{id}/posts', 'CountryController@listPost');

//Create user
Route::get('/users/create', 'UserController@create')->name('create-user');
//store user
Route::post('/users', 'UserController@store')->name('store-user');

Route::group(['namespace' => 'Auth'], function(){
	//show login form
	Route::get('/login', 'LoginController@showLoginForm')->name('form-login');
	//login
	Route::post('/login', 'LoginController@login')->name('login-user');

});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//show register form
Route::get('/register', 'Auth\RegisterController@showFormRegister')->name('form-register');
//create user
Route::post('/register', 'Auth\RegisterController@register')->name('register');

//admin dashboard
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin-dashboard')->middleware(['isAdmin']);
// page not permit
Route::get('/not-permission', 'AdminController@notPermission')->name('not-allow-access');
//delete user
Route::get('/users/{id}', 'UserController@destroy')->name('delete-user');

Route::resource('/categories', 'CategoryController');
// Route::get('/categories', 'CategoryController@index')->name('list-category');
