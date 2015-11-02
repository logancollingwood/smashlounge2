<?php namespace App\Submissions;

use Illuminate\Database\Eloquent\Model;
use App\Tech;
use App\Char;
class SubmissionGif extends Model {

	//
	protected $table = 'submissions';

	public function grabGfyName () {
	  $pattern = '/((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/';
	  $matches = array();
	  
	  preg_match ($pattern, $this->url, $matches);
	  
	  if (isset($matches[4])) 
	  	return $matches[4];
	  else 
	  	abort(500);
	}

	public function getTechName() {
		$tech = Tech::find($this->dataid);
		return $tech->tech;
	}
	public function getCharName() {
		$char = Char::find($this->dataid);
		return $char->name;
	}
}
