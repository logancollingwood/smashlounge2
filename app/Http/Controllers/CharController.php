<?php namespace App\Http\Controllers;
Use App\Char;

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
	public function index()
	{
		$chars = Char::orderBy('tierdata')->get();

		$data = [ 'chars'=> $chars, 'columns' => $this->columns ];
		return view($this->viewDir . ".char", $data);
	}

	public function show(Char $char) {
		/* this logic seems to be bonkers */
		/* The route seems to be passing a collection
			of all the techniques. Need to debug
		*/
		$gifs = $char->getGifs();
		$data = ['char' => $char , 'gifs' => $gifs];
		return view($this->viewDir . ".showChar", $data);
	}

	public function getAll() {
		$chars = Char::all();
		return $chars;
	}
}
