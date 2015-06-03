<?php

use Illuminate\Database\Seeder;

class VodvotesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('vodvotes')->delete();
        
		\DB::table('vodvotes')->insert(array (
			0 => 
			array (
				'id' => '1',
				'vodid' => '27',
				'voterid' => '2',
				'direction' => '1',
			),
			1 => 
			array (
				'id' => '2',
				'vodid' => '2',
				'voterid' => '2',
				'direction' => '1',
			),
			2 => 
			array (
				'id' => '3',
				'vodid' => '25',
				'voterid' => '2',
				'direction' => '1',
			),
			3 => 
			array (
				'id' => '4',
				'vodid' => '28',
				'voterid' => '2',
				'direction' => '1',
			),
			4 => 
			array (
				'id' => '5',
				'vodid' => '29',
				'voterid' => '2',
				'direction' => '1',
			),
			5 => 
			array (
				'id' => '6',
				'vodid' => '26',
				'voterid' => '2',
				'direction' => '1',
			),
			6 => 
			array (
				'id' => '7',
				'vodid' => '4',
				'voterid' => '2',
				'direction' => '1',
			),
			7 => 
			array (
				'id' => '8',
				'vodid' => '2',
				'voterid' => '4',
				'direction' => '1',
			),
			8 => 
			array (
				'id' => '9',
				'vodid' => '27',
				'voterid' => '4',
				'direction' => '1',
			),
			9 => 
			array (
				'id' => '10',
				'vodid' => '28',
				'voterid' => '4',
				'direction' => '-1',
			),
			10 => 
			array (
				'id' => '11',
				'vodid' => '29',
				'voterid' => '4',
				'direction' => '1',
			),
		));
	}

}
