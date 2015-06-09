<?php namespace App\Http\Controllers;
Use App\Tech;

class TechController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Tech Controller
	|--------------------------------------------------------------------------
	|
	| This is the controller for displaying the technique page
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
	public function index() {
		$techs = Tech::all();
		$data = [ 'techs'=> $techs ];
		return view('modules/tech', $data);
	}
	
	public function show(Tech $tech) {
		/* this logic seems to be bonkers */
		/* The route seems to be passing a collection
			of all the techniques. Need to debug
		*/
		
		$data = ['tech' => $tech ];
		return view('modules/showTech', $data);
	}
	
	public function getAll() {
		$techs = Tech::all();
		return $techs;
	}
	
	
}
