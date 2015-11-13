<?php namespace App;
/*
	This class communicates with the gifs table
*/
use Illuminate\Database\Eloquent\Model;

class Gifs extends Model {
	
	protected $table = 'gifs';
	
	public function queryGfycat() {
		$url = "https://gfycat.com/cajax/get/" . $this->url;
		$result = file_get_contents($url);
		
		return $result;
	}

	public function grabGfyName () {
	  $pattern = '/((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/';
	  $matches = array();
	  
	  preg_match ($pattern, $this->url, $matches);
	  
	  if (isset($matches[4])) 
	  	return $matches[4];
	  else 
	  	return "Bad gfy URL: " . $this->url;
	}
}