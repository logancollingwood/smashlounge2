<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	//
	protected $table = 'locals';

	public function getCleanFb() {
		return str_replace("https://www.facebook.com/groups/", "", $this->profileid);
	}
}
