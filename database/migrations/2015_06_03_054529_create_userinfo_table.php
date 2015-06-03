<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userinfo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('image', 130);
			$table->string('facebook', 90);
			$table->string('location', 130);
			$table->string('twitch', 90);
			$table->integer('userid')->unique('userid');
			$table->string('vod', 130);
			$table->string('twitter', 90);
			$table->integer('main');
			$table->string('sponsor', 90);
			$table->float('latitude', 10, 0);
			$table->integer('longitude');
			$table->string('friendcode', 12);
			$table->string('garpr', 90);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userinfo');
	}

}
