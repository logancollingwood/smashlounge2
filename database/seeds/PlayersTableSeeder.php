<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('players')->delete();
        
		\DB::table('players')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'PewPewU',
				'sponsor' => 'CLG',
				'desc' => '',
				'rank' => '10',
				'garpr' => '53c646848ab65f6d52f2e09a',
				'region' => 'NorCal',
			),
		));
	}

}
