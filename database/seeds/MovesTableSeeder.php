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
				'id' => '0',
				'name' => 'B Moves',
				'description' => 'bla',
			),
			1 => 
			array (
				'id' => '1',
				'name' => 'Jab',
				'description' => 'bla',
			),
			2 => 
			array (
				'id' => '2',
				'name' => 'Tilt',
				'description' => 'bla',
			),
			3 => 
			array (
				'id' => '3',
				'name' => 'Smash',
				'description' => 'bla',
			),
			4 => 
			array (
				'id' => '4',
				'name' => 'Aerials',
				'description' => 'bla',
			),
			5 => 
			array (
				'id' => '5',
				'name' => 'Ground Options',
				'description' => 'bla',
			),
			6 => 
			array (
				'id' => '6',
				'name' => 'Defensive Options',
				'description' => 'bla',
			),
		));
	}

}
