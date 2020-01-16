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


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

	Route::get('/', function () {
	    return view('welcome');
	});

	Route::post('savepost', 'PostController@savepost')->name('savepost');
	Route::post('updatepost/{id}', 'PostController@updatepost')->name('updatepost');
	Route::get('editpost/{id}', 'PostController@edit');

});
