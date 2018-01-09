<?php

use Illuminate\Database\Seeder;

class SubmissionsgroupTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('submissionsgroup')->delete();
        
	}

}
