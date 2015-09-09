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
	private $viewDir = "modules/tech";

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
		return view($this->viewDir, $data);
	}
	
	public function show(Tech $tech) {
		/* this logic seems to be bonkers */
		/* The route seems to be passing a collection
			of all the techniques. Need to debug
		*/
		$gifs = $tech->getGifs();
		$data = ['tech' => $tech , 'gifs' => $gifs];
		return view('modules/showTech', $data);
	}
	
	public function getAll() {
		$techs = Tech::all();
		return $techs;
	}
	
	
}
