<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'admin'], function(){
	//Dashboard
	Route::get('/dashboard', function(){
		return view('admin.dashboard');
	});
});

Route::get('/', 'WelcomeController@index');
Route::get('/listing', 'WelcomeController@index');
Route::post('/listing', 'WelcomeController@show');

Route::get('/verify/{ver_token}/{id}','Auth\RegisterController@verify_register');

Auth::routes();

//lengkapiDataSetelahVerif
Route::get('/{id}/userdetail', 'LengkapiDataController@edit');
Route::PUT('/{id}', 'LengkapiDataController@update');

// Manage Profile
Route::get('/{id}/manage', 'CustomerController@edit');

// Booking Form
Route::get('/booking', function () {
    return view('bookingform');
});
