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
	private $viewDir = "modules.techs";
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
		$techs = Tech::all();

		$data = [ 'techs'=> $techs, 'columns' => $this->columns ];
		return view($this->viewDir . ".tech", $data);
	}
	
	public function show(Tech $tech) {
		/* this logic seems to be bonkers */
		/* The route seems to be passing a collection
			of all the techniques. Need to debug
		*/
		$gifs = $tech->getGifs();
		$data = ['tech' => $tech , 'gifs' => $gifs];
		return view($this->viewDir . ".showTech", $data);
	}
	
	public function getAll() {
		$techs = Tech::all();
		return $techs;
	}
	
	
}
