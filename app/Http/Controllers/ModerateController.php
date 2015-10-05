<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Submissions\SubmissionGif;
use App\Submissions\SubmissionGroup;
use App\Submissions\SubmissionTech;
use App\Submissions\SubmissionVod;

class ModerateController extends Controller {

	private $viewDir = "modules.moderate";

	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$submissions["gifs"] = SubmissionGif::all();
		$submissions["groups"] = SubmissionGroup::all();
		$submissions["techs"] = SubmissionTech::all();
		$submissions["vods"] = SubmissionVod::all();
		

		$data = [ "submissions" => $submissions ];
		return view($this->viewDir . ".index", $data);

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
