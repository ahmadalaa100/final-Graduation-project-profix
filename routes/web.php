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

Route::get('/index','IndexController@index');
Route::get('/about','AboutController@about');
Route::get('/apply','ApplytController@apply');
Route::get('/book','BookController@book');
Route::get('/contact','ContactController@contact');
Route::get('/login','LoginController@login');
Route::get('/services','ServicesController@services');
Route::get('/signup','SignupController@signup');


