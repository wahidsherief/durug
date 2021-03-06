<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/search', function()
{
	return View::make('search');
});

Route::get('clublist', function()
{
	return View::make('clublist');
});

Route::post('search',[
  'uses' => 'MainController@viewRegistrationForm'
]);

Route::post('registration',[
  'uses' => 'MainController@doRegistration'
]);
