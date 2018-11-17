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

Auth::routes();

//HomeController
Route::get('/', 'HomeController@index')->name('index');

//ControlController
Route::get('search_query', 'ControlController@search')->name('search');
Route::get('broker', 'ControlController@brokerDetails')->name('broker');
Route::any('job-requests', 'ControlController@jobRequests')->name('job-requests');

Route::group(array('middleware' => 'auth'), function(){
	//ControlController
	Route::any('add-service', 'ControlController@addService')->name('add-service');
	Route::get('edit-service/{id?}', 'ControlController@editService')->name('edit-service');
	Route::any('post-job', 'ControlController@postJob')->name('post-job');

	//Account Controller
	Route::get('profile', 'AccountController@profile')->name('profile');
	Route::get('edit-profile', 'AccountController@editProfile')->name('edit-profile');	
});
