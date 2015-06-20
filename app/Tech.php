<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tech extends Model {

	//
	protected $table = 'techs';
	
	//This is a magic number that is used to identify technique gifs in the gifs table
	protected $typeid = '2'; 
	
	public function getGifs() {
		$gifs = Gifs::whereRaw('typeid = ? and dataid = ?', [$this->typeid, $this->id])->get();		
		return $gifs;
	}
}
