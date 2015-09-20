<?php namespace App\Http\Controllers;

use App\Tech;
use App\Char;
use App\Group;
use App\Vod;
use App\SmashGifs;

class GroupController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Group Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	private $viewDir = "modules.groups";
	private $regions = array('North Atlantic', 'South Atlantic', 'Mid West', 'Southwest', 'West Coast');

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
		$groups = array();
		foreach ($this->regions as $region) {
			$groups[] = $this->getByRegion($region);
		}

		$data = [ 'groups' => $groups ];

		return view($this->viewDir . '.index');
	}


	public function getAll() {
		$groups = Group::all();
		return $groups;
	}

	public function getByRegion($region) {
	    switch ($region) {
		    case "North Atlantic":
		        $regionKey = 1;
		        break;
		    case "South Atlantic":
		        $regionKey = 2;
		        break;
		    case "Mid West":
		        $regionKey = 3;
		        break;
		    case "Southwest":
		        $regionKey = 4;
		        break;
		    case "West Coast":
		        $regionKey = 5;
		        break;
		    }
		$groups = Group::where('region', '=', $regionKey);
	}
}
