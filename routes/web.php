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

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
	Route::resource('control/population', 'Control\\PopulationController');
	Route::post('/import-excel', 'Control\\PopulationController@importExcel');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/campus', 'Admin\\CampusController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/user', 'Admin\\UserController');
});