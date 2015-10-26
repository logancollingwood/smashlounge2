<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attack;
use App\Char;
use Illuminate\Http\Request;

class AttackController extends Controller {

	private $viewDir = "modules.attacks";

	// number of columns for list page	
	private $columns = 3;


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
		$attack->charname = Char::find($attack->charid)->name;
		
		$data = ['attack' => $attack, 'attrs' => $attack->getAttributes() ];

		return view($this->viewDir . ".show", $data);
		//dd($attack);
	}

	public function apiShow($id) {
		$attack = Attack::find($id);
		$attack->charname = Char::find($attack->charid)->name;

		return $attack;
	}
	public function apiShowChar($id) {
		$attacks = Attack::where('charid', '=', $id)->get();

		return $attacks;
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

		//append on the charname
		$attack->charname = Char::find($attack->charid)->name;
		
		$data = ['attack' => $attack];
		//dd($attack);

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
		//
		$attack = Attack::findOrFail($id);

	    $this->validate($request, [
	        'attack_id' => 'required'
	    ]);

	    $input = $request->all();

	    $attack->fill($input)->save();

	    Session::flash('flash_message', 'Attack successfully updated!');

	    return redirect()->back();
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
