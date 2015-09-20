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
| Submit        -- Submit Controller
|
| Can view all generated routes by running:
|
| 	php artisan route:list 
| 
| from the project directory.
|--------------------------------------------------------------------------
*/

Route::resource('techs', 'TechController');
Route::bind('techs', function($value, $route) {
	return App\Tech::where("tech", $value)->first();
});

Route::resource('chars', 'CharController');
Route::bind('chars', function($value, $route) {
	return App\Char::where("name", $value)->first();
});

Route::resource('vods', 'VodController');
Route::resource('groups', 'GroupController');

Route::resource('submit', 'SubmitController');


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| This is a generic list of API routes that are to be implemented
|
*/


Route::get('api/doc', 'ApiController@docs');
Route::get('api/smashgifs', 'ApiController@smashgifs');
Route::get('api/techs/', 'TechController@getAll');
Route::get('api/techs/{id}', 'ApiController@tech');


Route::get('api/chars/', 'CharController@getAll');
Route::get('api/chars/{id}', 'ApiController@char');


Route::get('api/groups/all', 'GroupController@getAll');


/*
|--------------------------------------------------------------------------
| Card Routes
|--------------------------------------------------------------------------
|
| These are cards that can be pulled into OBS streaming software to display
| realtime statistics and information on things in our database.
|
*/


Route::get('card/tech/{tech}', 'TechCardController@index');
Route::bind('card/tech/{tech}', function($value, $route) {
	return App\Tech::where("tech", $value)->first();
});




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
