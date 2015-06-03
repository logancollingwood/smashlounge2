<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('charinfo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 30);
			$table->integer('tierdata')->nullable();
			$table->string('weight', 11);
			$table->string('fallspeed', 11);
			$table->string('guide', 500);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('charinfo');
	}

}
