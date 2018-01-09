<?php

use Illuminate\Database\Seeder;

class GuidesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('guides')->delete();
        
		\DB::table('guides')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Marth -- just the tip',
				'slug' => 'clgppumarth',
				'typeid' => '1',
				'dataid' => '14',
				'description' => 'Learn how to be the best Marth in town',
				'author1_sponsor' => 'clg',
				'author1_name' => 'pewpewu',
				'author1_twitter' => 'clg_pewpewu',
				'author2_sponsor' => '',
				'author2_name' => '',
				'author2_twitter' => '',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
