<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Char extends Model {

	//
	protected $table = 'charinfo';
	
	//This is a magic number that is used to identify character gifs in the gifs table
	protected $typeid = '0'; 


	protected $moves = ["Special Moves", "Jabs", "Tilts", "Smash Attacks", "Aerials", "Ground Options", "Defensive Options"];



	public function getGifs() {
		$gifs = Gifs::whereRaw('typeid = ? and dataid = ?', [$this->typeid, $this->id])->get();		
		return $gifs;
	}

	public function getDataGifs() {

		$moves = array();
		$moves[0]['name'] = "Special Moves";
		$moves[1]['name'] = "Jabs";
		$moves[2]['name'] = "Tilts";
		$moves[3]['name'] = "Smash Attacks";
		$moves[4]['name'] = "Aerials";
		$moves[5]['name'] = "Ground Options";
		$moves[6]['name'] = "Defensive Options";

		/* Raw Query -- works well considering our deeply structured attack-gif-char schema relationship */
		
		$datagifs = \DB::select( \DB::raw("SELECT *, a.id as attack_id from attacks as a
		  	INNER JOIN gifs as g ON g.dataid = a.id
		    WHERE a.gameid=0 AND a.charid=:charid AND g.typeid=1"), 
			array(
		   		'charid' => $this->id,
	 	));

		foreach ($datagifs as $gif) {
			$moves[$gif->movetype]['gifs'][] = $gif;
		}

		return $moves;
	}

	public function gifs() {
		return $this->hasMany('App\Gifs')->whereRaw('typeid = ? and dataid = ?', [$this->typeid, $this->id]);
	}
}
