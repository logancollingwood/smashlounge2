<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGifvotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gifvotes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('gifid');
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
		Schema::drop('gifvotes');
	}

}
