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

Auth::routes();


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/doctor', 'Auth\LoginController@showDoctorLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/doctor', 'Auth\RegisterController@showDoctorRegisterForm');
Route::get('/bookappointment','PaitentsController@bookAppointment');

Route::group(['prefix' => 'doctor', 'middleware' => ['auth:doctor']], 
function () 
{
    Route::view('', 'Doctors.dashboard');
    Route::get('updateprofile','ProfileController@indexDoctor');
    Route::post('updateprofile', 'ProfileController@editDetails');


});
Route::group(['prefix' => 'home', 'middleware' => ['auth','verified']], 
function () 
{
    Route::view('', 'auth.home');
    Route::get('consult', 'HomeController@consult');
    Route::post('consult','HomeController@storeApplication');
    Route::get('selectdoc', 'HomeController@selectCatagory');
    Route::post('selectdoc/doccategory', 'HomeController@docCategory');
    Route::get('selectdoc/doccategory/{id}', 'HomeController@book');
    Route::get('profile', 'ProfileController@indexPatients');
    Route::post('profile', 'ProfileController@updatePatients');
});
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/doctor', 'Auth\LoginController@doctorLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/doctor', 'Auth\RegisterController@createDoctor');

// Route::view('/home', 'home')->middleware('auth');


Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () 
{
    Route::view('', 'Admin.dashboard');
}
);




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
