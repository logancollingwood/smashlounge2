<?php

use Illuminate\Database\Seeder;

class UserinfoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('userinfo')->delete();
        
		\DB::table('userinfo')->insert(array (
			0 => 
			array (
			)
		));
	}

}
