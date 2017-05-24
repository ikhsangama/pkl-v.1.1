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
	Route::get('/dashboard', 'DashboardController@index');

	//CRUD Agent
	Route::get('/agent', 'AgentsController@showAll');
	Route::get('/agent/{id}','AgentsController@show');
	Route::get('/agentcreate','AgentsController@createByAdmin');
	Route::post('/agent','AgentsController@storeByAdmin');
	Route::post('/agentupdate/{id}','AgentsController@edit');
	Route::get('/agentdelete/{id}','AgentsController@destroy');

	//CRUD Customer
	Route::get('/customer', 'CustomerController@showAll');
	Route::get('/customer/{id}', 'CustomerController@show');
	Route::get('/customercreate/', 'CustomerController@createByAdmin');
	Route::post('/customer/', 'CustomerController@storeByAdmin');
	Route::post('/customerupdate/{id}', 'CustomerController@edit');
	Route::get('/customerdelete/{id}', 'CustomerController@destroy');

	//CRUD Product
	Route::get('/product', 'PaketController@showAll');
});

Route::group(['middleware' => 'customer'], function(){
	//lengkapiDataSetelahVerif
	Route::get('/{id}/userdetail', 'LengkapiDataController@edit');
	Route::PUT('/{id}', 'LengkapiDataController@update');

	// Manage Profile
	Route::get('/{id}/manageprofile', 'EditProfilController@edit');
	Route::PUT('/{id}/update', 'EditProfilController@update');
});

Route::get('/', 'WelcomeController@index');
Route::get('/listing', 'WelcomeController@index');
Route::post('/listing', 'WelcomeController@show');

Route::get('/verify/{ver_token}/{id}','Auth\RegisterController@verify_register');

Auth::routes();

// Booking Form
Route::get('/booking', function () {
    return view('bookingform');
});
