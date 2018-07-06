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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/work', 'PagesController@work');
Route::get('/cgu','PagesController@cgu');
Route::get('/termsconditions','PagesController@tc');
Route::get('/businesses', 'PagesController@businesses');
Route::get('/accountancy','PagesController@accountancy');

Route::resource('articles', 'ArticlesController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('profile','UserController@index');

Route::resource('tags', 'TagController');

Route::resource('projects', 'ProjectController');