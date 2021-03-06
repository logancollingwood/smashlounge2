<?php

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Provide controller methods with object instead of ID
Route::model('techs', 'Tech');
Route::model('chars', 'Char');
Route::model('vods', 'Vod');
Route::model('groups', 'Group');
Route::model('players', 'Player');
Route::model('gif', 'Gifs');

/*
|--------------------------------------------------------------------------
| Basic Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/donate', 'HomeController@donate');
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
	$tech = App\Tech::where("tech", $value)->first();
	if ($tech == null) abort(404);
	return $tech;
});

Route::resource('chars', 'CharController');
Route::bind('chars', function($value, $route) {
	$char = App\Char::where("name", $value)->first();
	if ($char == null) abort(404);
	return $char;
});

Route::resource('players', 'PlayerController');
Route::bind('players', function($value, $route) {
	$player = App\Player::where("name", $value)->first();
	if ($player == null) abort(404);
	return $player;
});

Route::resource('guides', 'GuidesController');
Route::bind('guides', function($value, $route) {
	$guide = App\Guide::where("slug", $value)->first();
	if ($guide == null) abort(404);
	return $guide;
});


Route::get('vods/', 'VodController@index');
Route::get('vods/show/{slug}', 'VodController@show');

Route::get('vods/{type}', 'VodController@type');

Route::bind('vods', function($value, $route) {
	$vod = App\Vod::where("title", $value)->first();
	if ($vod == null) abort(404);
	return $vod;
});

Route::resource('groups', 'GroupController');
Route::bind('groups', function($value, $route) {
	$group = App\Group::where("name", $value)->first();
	if ($group == null) abort(404);
	return $group;
});

Entrust::routeNeedsRole('moderate*', 'moderator', Redirect::to('/'));
Route::resource('moderate', 'ModerateController');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| This is a generic list of API routes that are to be implemented
|
*/


Route::get('submit/', 'SubmitController@index');


Route::post('submit/gif/', [
	'before' => 'csrf',
    'uses' => 'SubmitController@storeGif',
    'as' => 'submit.gif'
]);
Route::post('submit/data/', [
	'before' => 'csrf',
    'uses' => 'SubmitController@storeData',
    'as' => 'submit.data'
]);
Route::post('submit/group/', [
	'before' => 'csrf',
    'uses' => 'SubmitController@storeGroup',
    'as' => 'submit.group'
]);
Route::post('submit/tech/', [
	'before' => 'csrf',
    'uses' => 'SubmitController@storeTech',
    'as' => 'submit.tech'
]);
Route::post('submit/vod/', [
	'before' => 'csrf',
    'uses' => 'SubmitController@storeVod',
    'as' => 'submit.vod'
]);
Route::post('submit/add', [
    'uses' => 'ModerateController@approve',
    'as' => 'moderate.add'
]);

Route::post('submit/delete', [
	'uses' => 'ModerateController@deny',
    'as' => 'moderate.deny'
]);


/*
|--------------------------------------------------------------------------
| Card and API Routes
|--------------------------------------------------------------------------
|
| These are the routes for the OBS cards and raw JSON dumps
|
*/

Route::get('api/doc', 'ApiController@docs');
Route::get('api/smashgifs', 'ApiController@smashgifs');

Route::get('api/techs/all', 'TechController@api_all');
Route::get('api/techs/{id}', 'ApiController@tech');

Route::get('api/chars/all', 'CharController@getAll');
Route::get('api/chars/{id}', 'ApiController@char');

Route::get('api/groups/all', 'GroupController@getAll');
Route::get('api/attack/{id}', 'AttackController@apiShow');
Route::get('api/attack/char/{id}', 'AttackController@apiShowChar');

Route::get('card/tech/{tech}', 'TechController@card');
Route::bind('card/tech/{tech}', function($value, $route) {
	return App\Tech::where("tech", $value)->first();
});


Route::resource('attack', 'AttackController');
Entrust::routeNeedsRole('attack/*/edit', 'contributor', Redirect::to('/'));



/*
|--------------------------------------------------------------------------
| Editing/Updating routes
|--------------------------------------------------------------------------
|
| 
|
*/
Route::get('update/attack/{attack}', 'AttackController@update');
Route::get('update/attack/char/{charid}', 'AttackController@updateChar');

Route::get('update/gif/{gifid}', 'TechController@card');
Route::get('update/char/{charid}', 'CharController@update');
Route::get('update/tech/{techid}', 'TechController@update');
