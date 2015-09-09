<?php namespace App;
/*
	This class communicates with the gifs table
*/
use Illuminate\Database\Eloquent\Model;

class Gifs extends Model {
	
	protected $table = 'gifs';
	
	
	public function printGfy() {
		echo '<div class="gfyTainer">';
			echo '<div class="row">';
				echo "<img class='gfyitem' data-expand=true data-id=$this->url />";
			echo '</div>';
		echo '</div>';
	}
}