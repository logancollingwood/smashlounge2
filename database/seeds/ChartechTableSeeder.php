<?php

use Illuminate\Database\Seeder;

class ChartechTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('chartech')->delete();
        
		\DB::table('chartech')->insert(array (
			0 => 
			array (
				'id' => '1',
				'charid' => '2',
				'techid' => '1',
			),
			1 => 
			array (
				'id' => '4',
				'charid' => '6',
				'techid' => '2',
			),
			2 => 
			array (
				'id' => '5',
				'charid' => '4',
				'techid' => '1',
			),
			3 => 
			array (
				'id' => '6',
				'charid' => '4',
				'techid' => '21',
			),
			4 => 
			array (
				'id' => '7',
				'charid' => '5',
				'techid' => '22',
			),
			5 => 
			array (
				'id' => '8',
				'charid' => '6',
				'techid' => '22',
			),
			6 => 
			array (
				'id' => '10',
				'charid' => '14',
				'techid' => '1',
			),
			7 => 
			array (
				'id' => '11',
				'charid' => '18',
				'techid' => '24',
			),
			8 => 
			array (
				'id' => '12',
				'charid' => '6',
				'techid' => '25',
			),
			9 => 
			array (
				'id' => '13',
				'charid' => '5',
				'techid' => '25',
			),
			10 => 
			array (
				'id' => '15',
				'charid' => '2',
				'techid' => '26',
			),
			11 => 
			array (
				'id' => '17',
				'charid' => '5',
				'techid' => '27',
			),
			12 => 
			array (
				'id' => '18',
				'charid' => '6',
				'techid' => '27',
			),
			13 => 
			array (
				'id' => '19',
				'charid' => '14',
				'techid' => '11',
			),
			14 => 
			array (
				'id' => '20',
				'charid' => '14',
				'techid' => '23',
			),
			15 => 
			array (
				'id' => '21',
				'charid' => '14',
				'techid' => '7',
			),
			16 => 
			array (
				'id' => '22',
				'charid' => '23',
				'techid' => '13',
			),
			17 => 
			array (
				'id' => '23',
				'charid' => '23',
				'techid' => '10',
			),
			18 => 
			array (
				'id' => '25',
				'charid' => '23',
				'techid' => '26',
			),
		));
	}

}
