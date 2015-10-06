<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmissionsgroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submissionsgroup', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 130);
			$table->string('fb', 290);
			$table->float('latitude', 10, 0);
			$table->float('longitude', 10, 0);
			$table->integer('region')->default(0);
			$table->integer('game')->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('submissionsgroup');
	}

}
