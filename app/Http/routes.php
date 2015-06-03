<?php


// Provide controller methods with object instead of ID
Route::model('techs', 'Tech');
Route::model('chars', 'Char');
Route::model('vods', 'Vod');
Route::model('groups', 'Group');

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

Route::get('/', 'WelcomeController@index');

Route::get('/tech/{name}', 'TechController@index');

Route::get('/char/{name}', 'CharController@index');

Route::get('/vod/{id}', 'VodController@index');

Route::get('/group/{id}', 'GroupController@index');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| This is a generic list of API routes that are to be implemented
|
*/


Route::get('api/', 'ApiController@docs');
Route::get('api/tech/', 'TechController@getAll');
Route::get('api/tech/{id}', 'ApiController@tech');

/*
Route::get('/api/tech/{id}', 'ApiController@tech');

Route::get('/api/char/{id}', 'ApiController@char');

Route::get('/api/vod/{id}', 'ApiController@vod');

Route::get('/api/group/{id}', 'ApiController@group');
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
