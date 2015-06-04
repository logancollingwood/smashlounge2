<?php namespace App\Http\Controllers;
use App\Tech;
use App\Char;
use App\Group;
use App\Vod;

class ApiController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Char Controller
	|--------------------------------------------------------------------------
	|
	| This is for the character display page
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
		return view('apidoc');
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
	public function group($id) {
		
	}

}
