<?php namespace App\Http\Controllers;

use App\Player;

class PlayerController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Char Controller
	|--------------------------------------------------------------------------
	|
	| This is for the character display page
	|
	*/
	private $viewDir = "modules.players";
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
		$players = Player::orderBy('rank')->get();
		$data = [ 'players'=> $players, 'columns' => $this->columns ];

		return view($this->viewDir . '.index', $data);
	}

	public function show(Player $player) {

		$data = ['player' => $player];
		
		return view($this->viewDir . '.show', $data);
	}

	public function getAll() {

		return $chars;
	}
}
