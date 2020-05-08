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
    return view('index');
});

Route::get('/index','IndexController@index')->name('index');
Route::get('/about','AboutController@about')->name('about');
Route::get('/apply','ApplytController@apply')->name('apply');
Route::get('/book','BookController@book')->name('book');
Route::get('/contact','ContactController@contact')->name('contact');
Route::get('/login','LoginController@login')->name('login');
Route::get('/services','ServicesController@services')->name('services');
Route::get('/signup','SignupController@signup')->name('signup');


