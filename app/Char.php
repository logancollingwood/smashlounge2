<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Char extends Model {

	//
	protected $table = 'charinfo';
	
	//This is a magic number that is used to identify character gifs in the gifs table
	protected $typeid = '0'; 
	
	public function getGifs() {
		$gifs = Gifs::whereRaw('typeid = ? and dataid = ?', [$this->typeid, $this->id])->get();		
		return $gifs;
	}
}
