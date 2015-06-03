<?php namespace App\Http\Controllers;

class VodController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Vod Controller
	|--------------------------------------------------------------------------
	|
	| This is for displaying vods
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
		return view('vods');
	}

}
