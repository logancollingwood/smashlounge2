<?php

use Illuminate\Database\Seeder;

class FramedatajsonTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('framedatajson')->delete();
        
		\DB::table('framedatajson')->insert(array (
			0 => 
			array (
				'id' => '1',
				'gifid' => '512',
				'json_text' => '[{"frame":11,"buttons":[""],"ctrlStick":["270","100"]},{"frame":12,"buttons":[""],"ctrlStick":["270","100"]},{"frame":13,"buttons":[""],"ctrlStick":["270","100"]},{"frame":14,"buttons":[""],"ctrlStick":["270","100"]},{"frame":15,"buttons":["y"],"ctrlStick":[]},{"frame":16,"buttons":["l"],"ctrlStick":[]},{"frame":17,"buttons":[""],"ctrlStick":["315","100"]},{"frame":18,"buttons":[""],"ctrlStick":["315","100"]},{"frame":19,"buttons":[""],"ctrlStick":["315","100"]},{"frame":20,"buttons":[""],"ctrlStick":["315","100"]},{"frame":21,"buttons":[""],"ctrlStick":["315","100"]}]',
			),
			1 => 
			array (
				'id' => '2',
				'gifid' => '513',
				'json_text' => '[{"frame":2,"buttons":[""],"ctrlStick":["270","100"]},{"frame":4,"buttons":["y"],"ctrlStick":[]},{"frame":5,"buttons":["l"],"ctrlStick":["225","100"]},{"frame":6,"buttons":[""],"ctrlStick":["225","100"]},{"frame":7,"buttons":[""],"ctrlStick":["225","100"]},{"frame":8,"buttons":[""],"ctrlStick":["225","100"]},{"frame":22,"buttons":[""],"ctrlStick":["270","100"]},{"frame":23,"buttons":["y"],"ctrlStick":[]},{"frame":24,"buttons":["l"],"ctrlStick":[]},{"frame":25,"buttons":[""],"ctrlStick":["225","100"]},{"frame":25,"buttons":[""],"ctrlStick":["225","100"]},{"frame":26,"buttons":[""],"ctrlStick":[]},{"frame":44,"buttons":[""],"ctrlStick":["270","100"]},{"frame":45,"buttons":["y"],"ctrlStick":[]},{"frame":46,"buttons":["l"],"ctrlStick":["315","100"]},{"frame":47,"buttons":[""],"ctrlStick":["315","100"]},{"frame":48,"buttons":[""],"ctrlStick":["315","100"]},{"frame":49,"buttons":[""],"ctrlStick":["315","100"]},{"frame":64,"buttons":[""],"ctrlStick":["270","100"]},{"frame":65,"buttons":["y"],"ctrlStick":[]},{"frame":66,"buttons":["l"],"ctrlStick":["315","100"]},{"frame":67,"buttons":[""],"ctrlStick":["315","100"]},{"frame":68,"buttons":[""],"ctrlStick":["315","100"]},{"frame":69,"buttons":[""],"ctrlStick":["315","100"]}]',
			),
		));
	}

}
