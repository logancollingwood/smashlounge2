<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Logan',
				'email' => 'logan6694@gmail.com',
				'password' => '$2y$10$x30xuuMuT1YHfJB1FBft2O0HhF0vnqnRycJS.HYMT7.WmE4TQAxru',
				'remember_token' => NULL,
				'created_at' => '2015-10-09 14:55:55',
				'updated_at' => '2015-10-09 14:55:55',
			),
		));
	}

}
