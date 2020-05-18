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
Route::post('/apply','ApplyController@insert')->name('applyTech');

Route::get('/book','BookController@book')->name('book');
Route::post('/book','BookController@create')->name('bookJob');

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

Route::middleware(['auth','CheckRole'])->group(function () {
    Route::get('/technicians','TechniciansController@index')->name('technicians');
    Route::get('/indexAdmin','IndexAdminController@indexAdmin')->name('indexAdmin');
    Route::get('/customers','OrdersController@index')->name('customers');
    Route::get('/loginAdmin',' LoginAdminController@loginAdmin')->name('loginAdmin');
    Route::get('/maps','MapsController@maps')->name('maps');
    Route::get('/updatecustomers','UpdatecustomerController@updatecustomers')->name('updatecustomers');
    Route::get('/updatetech','UpdatetechController@updatetech')->name('updatetech');
    Route::get('/delegatetable','delegatetableController@delegatetable')->name('delegatetable');
    Route::get('/updatedelegate','UpdateDelegateController@updatedelegate')->name('updatedelegate');
    Route::get('/Addtech',' AddTechController@Addtech')->name('Addtech');
   

});


/*
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
*/
Route::get('/delegate','DelegateController@index')->name('delegate');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customerpage','HomeController@test')->name('customer')->middleware('auth');