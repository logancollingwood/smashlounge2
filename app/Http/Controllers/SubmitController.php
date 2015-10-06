<?php namespace App\Http\Controllers;

use App\Submissions\SubmissionGif;
use Kris\LaravelFormBuilder\FormBuilder;

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
	public function index(FormBuilder $formBuilder) {
		$gifform = $formBuilder->create('App\Forms\GifForm', [
            'method' => 'POST',
            'url' => route('submit.gif')
        ]);

		return view($this->viewDir . ".index", compact('gifform'));
	}
	
	public function storeGif(FormBuilder $FormBuilder) {

		$form = $FormBuilder->create('App\Forms\GifForm');

		if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        //valid
        $submission = new SubmissionGif;

        $submission->url = $form->fields["url"];
        $submission->source = $form->fields["source"];
        $submission->description = $form->fields["description"];

        $submission->typeid = $form->fields["techSelector"];
        $submission->typeid = $form->fields["techSelector"];
        dd($submission);
        //$submission->save();
	}
	
}
