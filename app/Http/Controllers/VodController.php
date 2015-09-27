<?php namespace App\Http\Controllers;

use App\Vod;

class VodController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Vod Controller
	|--------------------------------------------------------------------------
	|
	| This is for displaying vods
	|
	*/
	private $viewDir = "modules.vods";
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
		$vods = Vod::all();

		$data = [ 'vods'=> $vods, 'columns' => $this->columns ];

		return view($this->viewDir . ".index", $data);
	}

	public function show(Vod $vod) {
		$data = [ 'vod' => $vod ];

		return view($this->viewDir . '.show', $data);
	}

}
