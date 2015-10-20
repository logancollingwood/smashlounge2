<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('AttacksTableSeeder');
		$this->call('CharinfoTableSeeder');
		$this->call('ChartechTableSeeder');
		$this->call('FramedatajsonTableSeeder');
		$this->call('FramedatamovesTableSeeder');
		$this->call('GifsTableSeeder');
		$this->call('GifvotesTableSeeder');
		$this->call('LocalsTableSeeder');
		$this->call('MovesTableSeeder');
		$this->call('TechsTableSeeder');
		//$this->call('UserinfoTableSeeder');
		$this->call('VodsTableSeeder');
		$this->call('VodvotesTableSeeder');
		$this->call('PlayersTableSeeder');
		$this->call('GuidesTableSeeder');

		//This seeds with a basic moderator role, my login, and adds me as a moderator
		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('RoleUserTableSeeder');
	}

}
