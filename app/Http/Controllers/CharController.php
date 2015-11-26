<?php namespace App\Http\Controllers;
use App\Char;

class CharController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Char Controller
	|--------------------------------------------------------------------------
	|
	| This is for the character display page
	|
	*/
	
	private $viewDir = "modules.chars";

	// number of columns for list page	
	private $columns = 3;

	private $gifs = [];

	private $moves = ["Special Moves", "Jabs", "Tilts", "Smash Attacks", "Aerials", "Ground Options", "Defensive Options"];

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the character list page.
	 *
	 * @return Response
	 */
	public function index()
	{
		$chars = Char::orderBy('tierdata')->get();

		$data = [ 'chars'=> $chars, 'columns' => $this->columns ];
		return view($this->viewDir . ".char", $data);
	}

	/**
	 * Show the specific character page.
	 *
	 * @return Response
	 */
	public function show($id) {
		$char = Char::where('name', '=', $id)->first();
		$gifs = $char->getGifs();
		$dataGifs = $char->getDataGifs();

		if (isset($gifs[0])) {
			$twitterGif = json_decode($gifs[0]->queryGfycat());
			$twitterGif->gfyItem->mp4Url = preg_replace("/^http:/i", "https:", $twitterGif->gfyItem->mp4Url);
			$twitterGif->gfyItem->webmUrl = preg_replace("/^http:/i", "https:", $twitterGif->gfyItem->webmUrl);
		} else {
			$twitterGif = [];
		}
		

		$data = ['char' => $char , 'gifs' => $gifs, 'dataGifs' => $dataGifs, 
					'dataColumns' => 3, 'submitDir' => "gif", 
					'moves' => $this->moves, 'twitterGif' => $twitterGif];
		
		return view($this->viewDir . ".show", $data);
	}

	/**
	 * Grab all characters
	 *
	 * @return array(Char)
	 */
	public function getAll() {
		$chars = Char::all();
		foreach ($chars as $char){
			$char->gifs = $char->getGifs();
		}
		return $chars;
	}

}
