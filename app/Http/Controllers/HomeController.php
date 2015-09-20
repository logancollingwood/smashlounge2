<?php namespace App\Http\Controllers;
Use App\Tech;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	//   Holds the folder link within resources/views where the blade view lives.
	//	this allows us to further organize our views into a models subdirectory.

	private $viewDir = "modules.home";
	private $randTechCount = 2;
	
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	

		$alltechs = Tech::orderByRaw("RAND()")->get();

		for ($i = 0; $i < $this->randTechCount; $i++) {
			$techs[] = $alltechs[$i];
		}

		$data = [ 'techs' => $techs ];

		return view($this->viewDir . ".homepage", $data);
	}

}
