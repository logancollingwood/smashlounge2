<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTechsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('techs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tech', 32);
			$table->string('description', 400);
			$table->string('smashwiki', 260);
			$table->string('inputs', 100);
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
		Schema::drop('techs');
	}

}
