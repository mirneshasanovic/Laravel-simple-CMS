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

Route::get('/', 'PostController@index')->name('sport');
Route::get('/sport', 'PostController@index')->name('sport');
Route::get('/create', 'PostController@create')->name('create');
Route::post('/store', 'PostController@store')->name('store');
Route::get('/football', 'PostController@football')->name('football');
Route::get('/handball', 'PostController@handball')->name('handball');
Route::get('/basketball', 'PostController@basketball')->name('basketball');
Route::get('/posts/{id}', 'PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
