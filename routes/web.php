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

// Route::get('/', function () {
//     //return view('welcome');
//     return 'hello world';
// });
Route::get('/', 'PagesController@index');
Route::get('/availability', 'PagesController@available');
Route::get('/create', 'PagesController@create_content');
// Route::get('create', 'PagesController@create_content');

