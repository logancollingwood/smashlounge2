<?php namespace App;
/*
	This class communicates with the gifs table
*/
use Illuminate\Database\Eloquent\Model;

class Gifs extends Model {
	
	protected $table = 'gifs';
	
	public function queryGfycat() {
		$url = "http://gfycat.com/cajax/get/" . $this->url;
		$result = file_get_contents($url);
		
		return $result;
	}
}