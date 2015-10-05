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
				"methods" => "getAll",
				"description" => "returns all groups"
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
	
	public function vod($id) {
		
	}

	public function smashgifs() {
		$smashGif = new SmashGifs();
		return $smashGif->gif;
	}
}
