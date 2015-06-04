<?php namespace App\Http\Controllers;
Use App\Char;

class CharController extends Controller {

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
	
	public function getAll() {
		$chars = Char::all();
		return $chars;
	}
}
