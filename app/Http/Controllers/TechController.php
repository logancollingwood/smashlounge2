<?php namespace App\Http\Controllers;
use App\Tech;

class TechController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Tech Controller
	|--------------------------------------------------------------------------
	|
	| This is the controller for displaying the technique page
	|
	*/
	
	// View Directory Path
	
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
		//dd($tech);	
		$gifs = $tech->getGifs();

		/**
		 * Grabs gif asset from gfyCat url so we can know if it's
		 * using fat.gfycat or zippy.gfycat, etc
		 * so we can give twitter the right links for
		 * metadata timeline embedding
		 */
		$twitterGif = [];
		

		$data = ['tech' => $tech, 'gifs' => $gifs, 'twitterGif' => $twitterGif, 'submitDir' => "gif"];
		return view($this->viewDir . ".showTech", $data);
	}

	public function card(Tech $tech) {
		$gifs = $tech->getGifs();

		$data = ['tech' => $tech , 'gifs' => $gifs];

		return view("modules.cards.tech.showtechcard", $data);
	}
	
	/**
	 * Grab all techniques
	 *
	 * @return array(Tech)
	 */
	public function getAll() {
		$techs = Tech::all();
		return $techs;
	}

	public function api_all() {
		$techs = Tech::all();
		foreach ($techs as $tech) {
			$tech->gifs = $tech->getGifs();
		}
		return $techs;
	}
	
	
}
