<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmissionstournamentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submissionstournament', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 90);
			$table->integer('fb_id');
			$table->string('bracket', 150);
			$table->date('start');
			$table->date('end');
			$table->string('first', 90);
			$table->string('second', 90);
			$table->string('third', 90);
			$table->string('stream', 45);
			$table->integer('attending');
			$table->string('location', 50);
			$table->string('host', 65);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('submissionstournament');
	}

}
