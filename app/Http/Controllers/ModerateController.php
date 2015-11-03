<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

use App\Submissions\SubmissionGif;
use App\Submissions\SubmissionGroup;
use App\Submissions\SubmissionTech;
use App\Submissions\SubmissionVod;

use App\Gifs;
use App\Group;
use App\Tech;
use App\Vod;

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
		foreach ($submissions["gifs"] as $submission) {
			$submission->url = $submission->grabGfyName();
		}

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

	public function approve(Request $request) {
		$key = $request->input('key');
		$id = $request->input('id');

		if ($key == 'gif') {
			$submission = SubmissionGif::findOrFail($id);
			
			$gif = new Gifs;
			$gif->url = $submission->grabGfyName();
			$gif->description = $submission->description;
			$gif->dataid = $submission->dataid;
			$gif->source = $submission->source;
			
			if ($submission->pageid == 0) {
				$gif->typeid=2;
			} else if ($submission->pageid == 1) {
				$gif->typeid=0;
			} else {
				abort(500);
			}

			//ready to save and delete the submission
			$gif->save();
			$submission->delete();

			return;

		} else if ($key == 'group') {
			$submission = SubmissionGroup::findOrFail($id);

			$group = new Group;
			$group->name = $submission->name;

			$group->profileid = $submission->facebook;
			
			$group->latitude = $submission->latitude;
			$group->longitude = $submission->longitude;

			$group->region = $submission->region;
			$group->game = $submission->game;

			//$group->save();
			//$submission->delete();

		} else if ($key == 'technique') {
			$submission = SubmissionTech::findOrFail($id);

			$technique = new Tech;
			$technique->tech = $submission->name;
			$technique->ssbwiki = $submission->ssbwiki;
			$technique->description = $submission->description;


			//$technique->save();
			//$submission->delete();

		} else if ($key == 'vod') {
			$submission = SubmissionVod::findOrFail($id);
			$vod = new Vod;

			$vod->title = $submission->title;
			$vod->url = $submission->url;
			$vod->description = $submission->description;
			$vod->source = $submission->credit;
			
			$vod->typeid= $submission->typeid;
			$vod->dataid = $submission->dataid;


			//$vod->save();
			//$submission->delete();
		} else {
			abort(500);
		}


		echo "approved submission with key: $key and id: $id";
	}

	public function deny(Request $request) {
		$key = $request->input('key');
		$id = $request->input('id');

		if ($key == 'gif') {
			$submission = SubmissionGif::findOrFail($id);
		} else if ($key == 'group') {
			$submission = SubmissionGroup::findOrFail($id);
		} else if ($key == 'technique') {
			$submission = SubmissionTech::findOrFail($id);
		} else if ($key == 'vod') {
			$submission = SubmissionVod::findOrFail($id);
		} else {
			die(500);
		}

		$submission->delete();
		echo "deleted submission with key: $key and id: $id";
	}

}
