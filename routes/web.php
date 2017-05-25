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

//ADMIN, LEVEL 0
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

//CUSTOMER, LEVEL 1
Route::group(['middleware' => 'customer'], function(){
	//lengkapiDataSetelahVerif
	Route::get('/{id}/customer/completing', 'LengkapiDataCustomerController@edit');
	Route::PUT('/{id}/customer', 'LengkapiDataCustomerController@update');

	// Manage Profile
	Route::get('/{id}/customer/showedit', 'EditProfilController@edit');
	Route::PUT('/{id}/update', 'EditProfilController@update');
});

//AGENT, LEVEL 2
Route::group(['middleware' => 'agent'], function(){
	//lengkapiDataSetelahVerif
	Route::get('/{id}/agent/completing', 'LengkapiDataAgentController@edit');
	Route::PUT('/{id}/agent', 'LengkapiDataAgentController@update');

	// Manage Profile
	// Route::get('/{id}/manageprofile', 'EditProfilController@edit');
	// Route::PUT('/{id}/update', 'EditProfilController@update');
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
