<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('roles')->delete();
        
		\DB::table('roles')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'moderator',
				'display_name' => 'moderator',
				'description' => 'For Moderating',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'contributor',
				'display_name' => 'contributor',
				'description' => 'For editing frame data',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			)
		));
	}

}
