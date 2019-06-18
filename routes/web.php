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
Route::get('/users', 'UserController@users')->name('users');
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

// Word
Route::get('/category/{id}/word', 'WordController@word');
Route::post('/category/{category_id}/save', 'WordController@save');
Route::get('/category/wordList', 'WordController@wordList');
Route::get('/category/{id}/showWords', 'WordController@showWords');
Route::get('/category/{id}/wordDelete', 'WordController@wordDelete');
Route::get('/category/{id}/wordEdit', 'WordController@wordEdit');
Route::post('/word/{id}/update', 'WordController@update');

// lesson
Route::get('/category/category_id={category_id}/lesson', 'LessonController@lesson')->name('lesson');
Route::get('/category/category_id={category_id}&index={index}/lesson/show', 'LessonController@lesson_show')->name('lesson_show');
Route::get('/category/{id}/result', 'LessonController@result')->name('result');
Route::get('/category/lesson_id={lesson_id}&option={option_id}&index={index}/store', 'LessonController@lesson_store')->name('lesson_store');
Route::get('/category/{id}/saveAnswer', 'WordController@saveAnswer');

//*from login button
Route::get('/login/{social}', 'Auth\LoginController@socialLogin')->where('social', 'facebook|twitter');
//*for callback
Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social', 'facebook|twitter');