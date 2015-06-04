<?php

use Illuminate\Database\Seeder;

class MovesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('moves')->delete();
        
		\DB::table('moves')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'B Moves'
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Jab'
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Tilt'
			),
			3 => 
			array (
				'id' => '4',
				'name' => 'Smash'
			),
			4 => 
			array (
				'id' => '5',
				'name' => 'Aerials'
			),
			5 => 
			array (
				'id' => '6',
				'name' => 'Ground Options'
			),
			6 => 
			array (
				'id' => '7',
				'name' => 'Defensive Options'
			),
		));
	}

}
