<?php namespace App\Http\Controllers;
use App\Tech;
use App\Char;
use App\SmashGifs;

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
	private $randTechCount = 1;
	private $streamCount = 3;

	// Consider making $clientid global? or pull from database?
	private $twitchclientId = 'j0p7hrbz0zec4a3vwfgrvau6nmw5e68'; 
	
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
		$allchars = Char::orderByRaw("RAND()")->get();

		/** Gather twitch streams **/
		$activeStreams = $this->getGameStreams('Super Smash Bros');
		$streams = [];
		for ($i = 0; $i < count($activeStreams); $i++) {
			if ($i > $this->streamCount) break;
			$streams[] = $activeStreams[$i];
		}
		for ($i = 0; $i < $this->randTechCount; $i++) {
			$techs[] = $alltechs[$i];

			$chars[] = $allchars[$i];
		}

		$data = [ 'techs' => $techs, 'chars' => $chars, 'streams' => $streams ];

		return view($this->viewDir . ".homepage", $data);
	}

	public function soon() {
		return view("welcome");
	}


	/** Functions **/

	/**
	 * Checks active streams for a specific game
	 * @param  string $game The game whose active streams we're looking for
	 * @return array, boolean = false       If there active streams, returns array, if not, returns false.
	 */
	public function getGameStreams($game = '') {
		$streamsArray = [];
		$queryString = urlencode($game);
		$file = "https://api.twitch.tv/kraken/search/streams?q=" . $queryString . "&client_id=" . $this->twitchclientId;
		
		// File Check
		if ($file) {
			$json_array = json_decode(file_get_contents($file), true);

			if ($json_array['streams'] != NULL) {
				foreach ($json_array['streams'] as $stream) {
					$streamsArray[] = $stream;
				}

				// Return active streams
				return $streamsArray;
			} else {
				// No active streams
				return false;
			}		
		} else {
			// Error in finding the file
			return false;
		}
	}

	/**
	 * Checks if channel is live
	 * @param  string $username Twitch username
	 * @return boolean          Whether or not the stream is live
	 */
	public function streamIsLive($username = '') {
		$file = "https://api.twitch.tv/kraken/streams?channel=$username";
		$json_array = json_decode(file_get_contents($file), true);

		if (empty($json_array['streams'])) {
			return false;
		} else {
			return true;
		}
	}

	public function about() {
		$team = array(
			0 => array(
				'name' => 'Logan Collingwood',
				'twitter' =>'__loganc',
				'role' => 'CoFounder - Lead Developer',
				'img'	=> 'lc'
			),
			1 => array(
				'name' => 'Kevin Toy',
				'twitter' =>'CLG_PewPewU',
				'role' => 'CoFounder - Knowledge',
				'img'	=> 'kt'
			),
			2 => array(
				'name' => 'Marco Salazar',
				'twitter' =>'Marceux',
				'role' => 'Advisor',
				'img'	=> 'ms' 
			),
			3 => array(
				'name' => 'Boback Vakili',
				'twitter' =>'boba_ck',
				'role' => 'Graphics',
				'img'	=> 'bv'
			),
			4 => array(
				'name' => 'Daniel Pagharion',
				'twitter' =>'dannypaguiao',
				'role' => 'Programming',
				'img'	=> 'dp'
			)
		);
		$data = [ 'team' => $team, 'columns' => 2 ];
		return view("modules.about.index", $data);
	}
	public function donate() {
		return view("modules.donate.index");
	}


}
