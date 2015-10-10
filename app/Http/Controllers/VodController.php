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
	private $vodcategories = array(1 => "Techniques", 2 => "Matches", 3 => "Entertainment", 4 => "PewPewUniversity", 5 => "Combos", 6 => "Teams");
	private $categories = array("Techniques", "Matches", "Entertainment", "PewPewUniversity", "Combos", "Teams");
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
		\DB::connection()->enableQueryLog();
		$vods = Vod::all();
		$allVods = array();

		//initializes an array with 1 vod per 6 categories for display on the home page
		foreach ($this->vodcategories as $key => $name) {
			$vods = Vod::whereRaw('typeid = ?', [$key])->orderByRaw("RAND()")->first();
			
			$allVods[$name] = $vods;
		}


		$data = [ 'vods'=> $allVods, 'columns' => $this->columns, 'categories' => $this->categories ];

		return view($this->viewDir . ".index", $data);
	}

	public function show(Vod $vod) {
		$data = [ 'vod' => $vod ];

		return view($this->viewDir . '.show', $data);
	}

	public function type($id) {
		$typestr = array_search(strtolower($id),array_map('strtolower', $this->vodcategories)); ;

		if (!$typestr) exit(404);

		$vods = Vod::whereRaw('typeid = ?', [$typestr])->get();
		
		$data = ['vods' => $vods, 'typestr' => $id];
		return view($this->viewDir . '.type', $data);
	}

}
