<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attack;
use App\Char;
use App\Gifs;
use Input;
use Redirect;
use Illuminate\Http\Request;

class AttackController extends Controller {

	private $viewDir = "modules.attacks";

	// number of columns for list page	
	private $columns = 3;

	private $attacktype = ['1' => 'aerial', '2' => 'smash',
					   '3' => 'tilt', '4' => 'special',
					   '5' => 'jab', '6' => 'dash',
					   '7' => 'grab', '8' => 'dodge',
					   '9' => 'roll', '10' => 'throw',
					   '11' => 'taunt' ];

	private $attackdir = ['0' => 'neutral', '1' => 'up',
						'2' => 'forward', '3' => 'down',
						'4' => 'back', '5' => 'n/a'];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$attack = Attack::find($id);

		$gif = Gifs::find($attack->gif_id);

		$data = ['attack' => $attack, 'attrs' => $attack->getAttributes(), 'gif' => $gif ];

		return view($this->viewDir . ".show", $data);
		//dd($attack);
	}

	public function apiShow($id) {
		$attack = Attack::find($id);
		$attack->charname = Char::find($attack->charid)->name;

		return $attack;
	}
	public function apiShowChar($id) {
		$json = [
					'id' => $id,
					'charname' => Char::find($id)->name
		];
		foreach($this->attacktype as $typeid => $typestr) {
			$attacks[$typestr] = Attack::whereRaw('charid = ? and input_type = ?', [$id, $typeid ])->get();
		}
		
		$json['attacks'] = $attacks;

		return $json;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$attack = Attack::find($id);
		if ($attack == null) return error(404);


		$gif = Gifs::find($attack->gifid);

		//append on the charname
		$attack->charname = Char::find($attack->charid)->name;
		$fields = array(
			'charid', 'gameid', 'description',
			'total_frames', 
			'active_start', 'active_end', 'hit_start',
			'hit_end', 'hit_second_start', 
			'hit_second_end', 'iasa',
			'charge_frame', 'invincible_start', 
			'invincible_end', 'landlag', 'lcancel',
			'auto_cancelable', 'auto_cancel_start',
			'auto_cancel_end', 'grab_start', 'grab_end',
			'reflects', 'reflect_start', 'reflect_end',
			'lag_on_release', 'reflection_lag', 'jcable', 'grounded'
		);



		$data = ['attack' => $attack, 'fields' => $fields, 'gif' => $gif];
		
		return view($this->viewDir . ".edit", $data);
	}

	/**
	 * Show the form for editing the attacks for a given character.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editChar($id)
	{
		//
		$attacks = Attack::where('charid', '=', $id)->get();
		if ($attacks == null) return error(404);
		
		
		$data = ['attacks' => $attacks];
		dd($attacks);

		return view($this->viewDir . ".edit", $data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$attack = Attack::findOrFail($id);

	   	if (!$attack->update(Input::all())) {
	   		return Redirect::back()
	   				->with('message', 'Whoops!')
	   				->withInput();
	   	}

		return Redirect::back()
			   				->with('message', 'Successfully updated!')
			   				->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
