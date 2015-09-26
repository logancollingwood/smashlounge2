<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tech;

use Illuminate\Http\Request;

class TechCardController extends Controller {

	private $viewDir = "modules.cards.tech";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Tech $tech)
	{
		
		$gifs = $tech->getGifs();

		$data = ['tech' => $tech , 'gifs' => $gifs];

		return view($this->viewDir . ".showtechcard", $data);
	}


	public function show(Tech $tech) {

		$gifs = $tech->getGifs();

		$data = ['tech' => $tech , 'gifs' => $gifs];

		return view($this->viewDir . ".showtechcard", $data);
	}

}
