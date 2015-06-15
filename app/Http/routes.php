<?php


// Provide controller methods with object instead of ID
Route::model('techs', 'Tech');
Route::model('chars', 'Char');
Route::model('vods', 'Vod');
Route::model('groups', 'Group');

/*
|--------------------------------------------------------------------------
| Basic Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Resource Modules
| Techniques 	-- Tech Controller
| Characters 	-- Char Controller
| Vods 			-- Vod Controller
| Groups	 	-- Group Controller
|
| Can view all generated routes by running:
|
| 	php artisan route:list 
| 
| from the project directory.
|--------------------------------------------------------------------------
*/

Route::resource('techs', 'TechController');
Route::resource('chars', 'CharController');
Route::resource('vods', 'VodController');
Route::resource('groups', 'GroupController');


// This allows us to pass in objects to the controllers
Route::bind('techs', function($value, $route) {
	return App\Tech::where("tech", $value)->first();
});

Route::bind('chars', function($value, $route) {
	return App\Char::where("name", $value)->first();
});


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| This is a generic list of API routes that are to be implemented
|
*/


Route::get('api/', 'ApiController@docs');
Route::get('api/smashgifs', 'ApiController@smashgifs');
Route::get('api/techs/', 'TechController@getAll');
Route::get('api/techs/{id}', 'ApiController@tech');


Route::get('api/chars/', 'CharController@getAll');
Route::get('api/chars/{id}', 'ApiController@char');



/*

Route::get('/api/char/{id}', 'ApiController@char');

Route::get('/api/vod/{id}', 'ApiController@vod');

Route::get('/api/group/{id}', 'ApiController@group');
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
