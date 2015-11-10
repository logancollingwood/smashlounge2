<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Attack extends Model {

	//
	protected $table = 'attacks';

	protected $guarded = array();

	protected $attacktype = ['1' => 'aerial', '2' => 'smash',
					   '3' => 'tilt', '4' => 'special',
					   '5' => 'jab', '6' => 'dash',
					   '7' => 'grab', '8' => 'dodge',
					   '9' => 'roll', '10' => 'throw',
					   '11' => 'taunt' ];

	protected $attackdir = ['0' => 'neutral', '1' => 'up',
						'2' => 'forward', '3' => 'down',
						'4' => 'back', '5' => 'n/a'];

	/* Mutates input dir to readable string */
	public function getInputDirAttribute($value) {
		return $this->attackdir[$value];
	}

	/* Mutates input type to readable string */
	public function getInputTypeAttribute($value) {
		return $this->attacktype[$value];
	}

	public function getCharAttacks($id) {
		$attacks = Attack::whereRaw('charid = ?', [$id])->get();		
		return $attacks;
	}

	public function getAttackDir() {
		return $this->attackdir[$this->input_dir];
	}

	public function getAttackType() {
		return $this->attacktype[$this->input_type];
	}

}
