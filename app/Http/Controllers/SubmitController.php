<?php namespace App\Http\Controllers;

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
            'url' => route('submit.store')
        ]);

		return view($this->viewDir . ".index", compact('gifform'));
	}
	
	public function store(FormBuilder $FormBuilder) {
		$form = $formBuilder->create('App\Forms\GifForm');
		if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        //valid

	}
	
}
