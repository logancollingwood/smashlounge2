<?php namespace App\Http\Controllers;
use App\Tech;
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
	private $viewDir = "modules.api";

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
				"module" => "groups",
				"action" => "GET",
				"methods" => "/api/groups/all",
				"description" => "retrieves a json formatted object containing all regional groups"
			),
			array(
				"module" => "techs",
				"action" => "GET",
				"methods" => "/api/techs/all",
				"description" => "retrieves a json formatted object containing all techniques currently in the database"
			),
		);


		$data = [ "api" => $api ];

		return view($this->viewDir . '.doc', $data);
	}
	
	
	public function char($id) {
		$char = Char::find($id);
		return $char;
	}
	
	public function tech($id) {
		$tech = Tech::find($id);
		return $tech;
	}
	
	public function vod($id) {
		
	}

	public function smashgifs() {
		$smashGif = new SmashGifs();
		return $smashGif->gif;
	}
}
