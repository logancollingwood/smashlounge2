<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpcomingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upcoming', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 45);
			$table->string('fb_id', 130);
			$table->string('bracket', 250);
			$table->string('class', 35)->default('event-info');
			$table->date('start');
			$table->date('end');
			$table->string('first', 90);
			$table->string('second', 90);
			$table->string('third', 90);
			$table->string('stream', 90);
			$table->integer('attending');
			$table->string('location', 90);
			$table->string('host', 90);
			$table->string('vods', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('upcoming');
	}

}
