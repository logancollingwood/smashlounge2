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
				'remember_token' => '7bBPuMrOfjwosXBTdOaC8gX02PkuzzRN7Z6WPn3DOlwmKqSkH0TAcNJLlget',
				'created_at' => '2015-10-09 14:55:55',
				'updated_at' => '2017-08-13 20:09:11',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'schmoo',
				'email' => 'will_beats@hotmail.co.uk',
				'password' => '$2y$10$zPbpeUOyFmdoK9d8QxxV.eGSqkWXX1IgHEOLcRG/Flk7C1nyK37zy',
				'remember_token' => NULL,
				'created_at' => '2015-11-25 17:45:53',
				'updated_at' => '2015-11-25 17:45:53',
			),
		));
	}

}
