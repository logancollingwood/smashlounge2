<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attacks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('charid');
			$table->integer('gameid');
			$table->string('description', 450);
			$table->string('inputs', 450);
			$table->integer('links_to');
			$table->integer('links_from');
			$table->integer('movetype');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attacks');
	}

}
