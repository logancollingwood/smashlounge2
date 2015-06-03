<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVodvotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vodvotes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vodid');
			$table->integer('voterid');
			$table->boolean('direction');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vodvotes');
	}

}
