<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'api', 'middleware' => ['is-token']], function () {
	// Route::get('logout', 'LoginController@logout');
	// Route::get('dashboard', 'DashboardController@dashboard');
	Route::get('homeworks','HomeworkController@homeworks');
	// Route::get('standards', 'StandardController@standards');
	// Route::get('sections', 'StandardController@sections');
	// Route::get('subjects', 'StandardController@subjects');
	// Route::get('clients', 'ClientController@clients');
	// Route::get('users', 'UserController@users');
	// Route::get('roles', 'UserController@roles');
});

Route::get('lteview', function () {
    return view('admin_lte_view.adminlte-view');
});

Route::get('/','LoginController@loginView');
Route::post('login','LoginController@login');
Route::get('register','LoginController@register');

// Route::group(['middleware' => ['is-loggedin']], function () {
// 	Route::get('logout', 'LoginController@logout');
// 	Route::get('dashboard', 'DashboardController@dashboard');
// 	Route::get('homeworks','HomeworkController@homeworks');
// 	Route::get('standards', 'StandardController@standards');
// 	Route::get('sections', 'StandardController@sections');
// 	Route::get('subjects', 'StandardController@subjects');
// 	Route::get('clients', 'ClientController@clients');
// 	Route::get('users', 'UserController@users');
// 	Route::get('roles', 'UserController@roles');
// });

// Route::group(['middleware' => ['api']], function () {
// 	Route::post('goinside','LoginController@goinside');
// });