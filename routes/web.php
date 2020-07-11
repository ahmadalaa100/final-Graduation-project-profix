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

Route::get('/book','BookController@book')->name('book')->middleware('auth');
Route::post('/book','BookController@create')->name('bookJob');

Route::get('/contact','ContactController@contact')->name('contact');
Route::post('/contact','ContactController@send')->name('sendContact');

Route::get('/login','LoginController@login')->name('login');
Route::get('/services','ServicesController@services')->name('services');
Route::get('/signup','SignupController@signup')->name('signup');

Route::get('/customerUI','CustomeruiController@customer')->name('customerUI');
Route::get('/delegate','DelegateuiController@delegate')->name('delegate');
Route::get('/technicianui','TechuiController@technicianui')->name('technicianui');



Route::get('/customerform','CustomeruiController@customerform')->name('customerform');
Route::get('/delegateform','DelegateuiController@delegateform')->name('delegateform');
Route::get('/techform','TechuiController@techform')->name('techform');



/*
Route::get('/indexAdmin','IndexAdminController@indexAdmin')->name('indexAdmin');
Route::get('/customers','OrdersController@index')->name('customers');
Route::get('/loginAdmin',' LoginAdminController@loginAdmin')->name('loginAdmin');
Route::get('/maps','MapsController@maps')->name('maps');
Route::get('/technicians','TechniciansController@index')->name('technicians');
*/

Route::middleware(['auth','CheckRole'])->group(function () {

    Route::get('/technicians','TechniciansController@index')->name('technicians');
    Route::get('/techfreeze/{id}','TechniciansController@freeze')->name('techfreeze');
    Route::get('/techactive/{id}','TechniciansController@active')->name('techactive');
    Route::get('/techdelete/{id}','TechniciansController@destroy')->name('techdelete');
    Route::get('/techedit/{id}','TechniciansController@edit')->name('techedit');
    Route::post('/techupdate/{id}','TechniciansController@update')->name('techupdate');


    Route::get('/indexAdmin','IndexAdminController@indexAdmin')->name('indexAdmin');
    Route::get('/customers','OrdersController@index')->name('customers');

    Route::get('/deleteOrder/{id}','OrdersController@destroy')->name('deleteOrder');
    Route::get('/editOrder/{id}','OrdersController@edit')->name('editOrder');
    Route::post('/updateOrder/{id}','OrdersController@update')->name('updateOrder');
    Route::post('/changeAssign/{id}','OrdersController@changeAssign')->name('changeAssign');

    Route::get('/loginAdmin',' LoginAdminController@loginAdmin')->name('loginAdmin');
    Route::get('/maps','MapsController@maps')->name('maps');
    Route::get('/updatecustomers','UpdatecustomerController@updatecustomers')->name('updatecustomers');
    Route::get('/updatetech','UpdatetechController@updatetech')->name('updatetech');
    
    Route::get('/delegatetable','delegatetableController@delegatetable')->name('delegatetable');
    Route::get('/delegatetabledelete/{id}','delegatetableController@destroy')->name('deleteTable');
    Route::get('/delegatetable/edit/{id}','delegatetableController@edit')->name('delegateEdit');
    Route::post('/delegatetable/update/{id}','delegatetableController@update')->name('delegateUpdate');

    Route::get('/updatedelegate','UpdateDelegateController@updatedelegate')->name('updatedelegate');
    Route::get('/Addtech',' AddTechController@Addtech')->name('Addtech');
    
    Route::get('/Addtech','AddTechController@Addtech')->name('Addtech');
    Route::post('/Addtech','AddTechController@insert')->name('inserttech');
    Route::get('/Adddelegate','AdddelegateController@Adddelegate')->name('Adddelegate');


   

});


Route::get('payment/{id}/{price}','PayController@index')->name('pay');
Route::post('stripe/{id}', 'PayController@charge')->name('stripe.post');


Route::post('/adduser','CustomersController@addUser')->name('adduser');

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
Route::get('/delegates','DelegateController@index')->name('delegate');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customerpage','HomeController@test')->name('customer')->middleware('auth');