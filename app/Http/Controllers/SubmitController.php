<?php namespace App\Http\Controllers;


class SubmitController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Submit Controller
	|--------------------------------------------------------------------------
	|
	| This is the controller for displaying the submit page
	|
	*/
	private $viewDir = "modules.submit";
	private $columns = 3;

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
	public function index() {

		return view($this->viewDir . ".submit");
	}
	

	
}
