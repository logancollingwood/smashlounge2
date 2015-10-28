<?php namespace App;


class SmashGifs {

	private $url = "http://www.reddit.com/r/smashgifs/hot.json";
	public $gif = "";
	
	public function __construct() {
		$reddit_string = file_get_contents($this->url);
		$json = json_decode($reddit_string, true);
		$children = $json['data']['children'];
		$rand = rand(0, count($children)-1);
		
		$this->gif = $children[$rand];
		return $this;
	}

	public function __api() {
		return $this;
	}
	
	//
	protected $table = 'techs';
}
