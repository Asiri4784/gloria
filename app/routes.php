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

Route::get('homes', array(
	'as'=>'homes',
	'uses'=>'HomeController@home'
));
Route::get('/', array(
	'as'=>'home',
	'uses'=>'IndexController@index'
));

Route::get('product', array( 'as'=>'product', function()
{
	return View::make('product');
}));