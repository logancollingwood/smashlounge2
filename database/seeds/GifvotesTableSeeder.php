<?php

use Illuminate\Database\Seeder;

class GifvotesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('gifvotes')->delete();
        
		\DB::table('gifvotes')->insert(array (
			0 => 
			array (
				'id' => '1',
				'gifid' => '526',
				'voterid' => '2',
				'direction' => '1',
			),
			1 => 
			array (
				'id' => '2',
				'gifid' => '527',
				'voterid' => '2',
				'direction' => '1',
			),
			2 => 
			array (
				'id' => '3',
				'gifid' => '1875',
				'voterid' => '2',
				'direction' => '1',
			),
			3 => 
			array (
				'id' => '4',
				'gifid' => '513',
				'voterid' => '2',
				'direction' => '1',
			),
			4 => 
			array (
				'id' => '5',
				'gifid' => '8',
				'voterid' => '2',
				'direction' => '1',
			),
		));
	}

}
