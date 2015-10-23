<?php namespace App\Http\Controllers;

use App\Submissions\SubmissionGif;
use App\Submissions\SubmissionVod;
use App\Submissions\SubmissionTech;
use App\Submissions\SubmissionGroup;

use Illuminate\Http\Request;
use App\Tech;
use App\Char;

class SubmitController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Submit Controller
	|--------------------------------------------------------------------------
	|
	| This is the controller for displaying the submit page
	|
	*/
	private $viewDir = "modules.submit";
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
	public function index() {

		$techs = Tech::all();
		$techSelect = array();
		foreach ($techs as $tech) {
			$techSelect[$tech->id] = $tech->tech;
		}

		$chars = Char::all();
		$charsSelect = array();
		foreach ($chars as $char) {
			$charsSelect[$char->id] = $char->name;
		}

		$data = ['techs' => $techSelect, 'chars' => $charsSelect];

		return view($this->viewDir . ".index", $data);
	}
	
	public function storeGif(Request $request) {
		$name = $request->input('giftype');
		$submission = new SubmissionGif;

		//submitting tech gif
		if ($name == "T") {
			$input = $request->only('giftech', 'gifurl', 'gifdescription', 'gifsource');
			$submission->pageid = 0;
			$submission->dataid = $input["giftech"];
		} else if ($name == "C") {
			$submission->pageid = 1;
			$input = $request->only('gifchar', 'gifurl', 'gifdescription', 'gifsource');
			$submission->dataid = $input["gifchar"];
		} else {
			error(500);
		}

		$submission->url = $input["gifurl"];
		$submission->description = $input["gifdescription"];
		$submission->source = $input["gifsource"];
		$submission->save();

		return redirect('submit/#gif')->with('message', 'Gif submitted successfully!');
	}

	public function storeVod(Request $request) {
		$input = $request->all();

		$submission = new SubmissionVod;
		$submission->url = $input["vodurl"];
		$submission->description = $input["voddescription"];
		$submission->title = $input["vodtitle"];
		$submission->credit = $input["vodsource"];
		$submission->save();

		return redirect('submit/#vod')->with('message', 'Vod submitted successfully!');
	}
	public function storeGroup(Request $request) {
		$input = $request->all();

		//dd($input);
		if ($input["grouplat"] == "" || $input["grouplong"] == "") {
			return redirect('submit/#group')->with('message', 'Please specify a latitude and longitude for your submission');
		}
		$submission = new SubmissionGroup;
		

		$submission->name = $input["groupname"];
		$submission->facebook = $input["groupfb"];
		$submission->latitude = $input["grouplat"];
		$submission->longitude = $input["grouplong"];

		$submission->save();

		return redirect('submit/#vod')->with('message', 'Group submitted successfully!');
	}
	public function storeTech(Request $request) {
		$input = $request->all();

		if ($input["techname"] == "" || $input["techdescription"] == "" || $input["techwiki"] == "") {
			return redirect('submit/#tech')->with('message', 'You forgot some fields!');
		}
		
		$submission = new SubmissionTech;
		$submission->name = $input["techname"];
		$submission->description = $input["techdescription"];
		$submission->ssbwiki = $input["techwiki"];

		$submission->save();

		return redirect('submit/#vod')->with('message', 'Tech submitted successfully!');
	}
	
}
