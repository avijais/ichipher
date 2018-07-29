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

Route::auth();

// Route::group(['middleware' => ['web']], function () {
    /*VIEWS*/
	Route::get('/', function () {
	    return view('login');
	});

	Route::get('register', function () {
	    return view('register');
	});

	Route::get('dashboard', function () {
	    return view('dashboard');
	});

	Route::get('homeworks', function () {
		return view('homeworks.homeworks');
	});

	Route::get('lteview', function () {
	    return view('admin_lte_view.adminlte-view');
	});
// });

/*API*/
Route::post('goinside','LoginController@goinside');
Route::get('homeworks','HomeworkController@homeworks');
Route::get('standards', 'StandardController@standards');
Route::get('sections', 'StandardController@sections');
Route::get('subjects', 'StandardController@subjects');

// Route::group(['middleware' => ['auth:api']], function () {
	// Route::post('goinside','LoginController@goinside');
// });


