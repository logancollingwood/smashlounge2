<?php namespace App\Http\Controllers;
use App\Tech;
use App\Gifs;
use App\Char;
use App\Group;
use App\Vod;
use App\SmashGifs;

class ApiController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Api Controller
	|--------------------------------------------------------------------------
	|
	| This is for the forward facing API
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('character');
	}
	
	public function docs() {
		
		$api = array(
			array(
				"action" => "get",
				"module" => "groups",
				"endpoint" => "/api/groups/all",
				"description" => "returns all groups",
				"format" => "JSON"
			),
			array(
				"action" => "get",
				"module" => "techs",
				"endpoint" => "/api/techs/all",
				"description" => "returns all techniques, as well as associated gifs for each technique",
				"format" => "JSON"
			),
			array(
				"action" => "get",
				"module" => "chars",
				"endpoint" => "/api/chars/all",
				"description" => "returns all characters, as well as associated gifs for each character",
				"format" => "JSON"
			),
			array(
				"action" => "get",
				"module" => "attacks",
				"endpoint" => "/api/attack/1",
				"description" => "Retrieves an attack (specified by ID)",
				"format" => "JSON"
			),
			array(
				"action" => "get",
				"module" => "attacks",
				"endpoint" => "/api/attack/char/1",
				"description" => "Retrieves all attacks for a specific character (specified by character ID)",
				"format" => "JSON"
			),
		);


		$data = [ "api"=> $api ];

		return view('modules.api.doc', $data);
	}
	
	
	public function char($id) {
		$char = Char::find($id);
		return $char;
	}
	
	public function tech($id) {
		$tech = Tech::find($id);
		return $tech;
	}

	public function gif(Gifs $gif) {
		return $gif;
	}
	public function charGifs(Char $char) {

	}
	public function techGifs(Char $char) {

	}

	public function vod($id) {
		
	}

	public function smashgifs() {
		$smashGif = new SmashGifs();
		return $smashGif->gif;
	}
}
