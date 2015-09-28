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
				'typeid' => '1',
				'dataid' => '14', //author
				'marth' => 'CLG | PEWPEWU',
				'name' => 'Marth -- just the tip',
				'description' => 'Learn how to be the best Marth in town',
				'guide' => 'Spacing: '
			)
		));
	}
}

?>