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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// User
Route::get('/users', 'UserController@users');
Route::get('/user/{id}/profile', 'UserController@show')->name('profile');
Route::get('/user/{id}/editProfile', 'UserController@editProfile');
Route::post('/user/{id}/update', 'UserController@update');
Route::get('/admin/addAdmin', 'UserController@addAdmin');
Route::post('/admin/addAdmin/save', 'UserController@saveAdmin')->name('saveAdmin');
Route::get('/user/{id}/delete', 'UserController@deleteUser');

// Follow
Route::get('/user/{id}/follow', 'UserController@follow');
Route::get('/user/{id}/unfollow', 'UserController@unfollow');

// Category
Route::get('/admin/category', 'CategoryController@category');
Route::get('/category/addNewCategory', 'CategoryController@addNewCategory');
Route::post('/category/addNewCategory/save', 'CategoryController@save');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::post('/category/{id}/update', 'CategoryController@update');
Route::get('/category/{id}/delete', 'CategoryController@delete');
