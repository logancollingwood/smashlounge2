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

	public function show(Group $group) {
		$data = [ 'group' => $group ];

		return view($this->viewDir . '.show', $data);
	}


	public function getAll() {
		$groups = Group::all();
		return $this->decodeResults($groups);
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
		return $groups;
	}
	
	private function decodeResults($groups) {
		foreach ($groups as $group) {
			$group = $this->decodeGroup($group);
		}
		return $groups;
	}

	function decodeGroup(Group $group) {
		switch($group["game"]) {
			case "0": 
				$group["game"] = "All Titles";
				break;
			case "1": 
				$group["game"] = "Smash 64";
				break;
			case "2": 
				$group["game"] = "Melee";
				break;
			case "3";
				$group["game"] = "Brawl";
				break;
			case "4";
				$group["game"] = "PM";
				break;
			case "5";
				$group["game"] = "Smash 4";
				break;
		}
		switch ($group["region"]) {
		    case "1":
		        $group["region"] = "North Atlantic";
		        break;
		    case "2":
		    	$group["region"] = "South Atlantic";
		        break;
		    case "3":
		   	    $group["region"] = "Mid West";
		        break;
		    case "4":
		    	$group["region"] = "Southwest";
		        break;
		    case "5":
		    	$group["region"] = "West Coast";
		        break;
		    case "6":
		    	$group["region"] = "International";
		    	break;
	    }
	    return $group;
	}

}
