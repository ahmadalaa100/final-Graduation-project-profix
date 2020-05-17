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
Route::get('/apply','ApplyController@apply')->name('apply');
Route::get('/book','BookController@book')->name('book');

Route::get('/contact','ContactController@contact')->name('contact');
Route::post('/contact','ContactController@send')->name('sendContact');

Route::get('/login','LoginController@login')->name('login');
Route::get('/services','ServicesController@services')->name('services');
Route::get('/signup','SignupController@signup')->name('signup');


/*
Route::get('/indexAdmin','IndexAdminController@indexAdmin')->name('indexAdmin');
Route::get('/customers','OrdersController@index')->name('customers');
Route::get('/loginAdmin',' LoginAdminController@loginAdmin')->name('loginAdmin');
Route::get('/maps','MapsController@maps')->name('maps');
Route::get('/technicians','TechniciansController@index')->name('technicians');
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/technicians','TechniciansController@index')->name('technicians');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/indexAdmin','IndexAdminController@indexAdmin')->name('indexAdmin');

});


Route::middleware(['auth'])->group(function () {
   Route::get('/customers','OrdersController@index')->name('customers');
});


Route::middleware(['auth'])->group(function () {
   Route::get('/loginAdmin',' LoginAdminController@loginAdmin')->name('loginAdmin');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/maps','MapsController@maps')->name('maps');
});
Route::get('/delegate', function () {
    return view('delegate');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
