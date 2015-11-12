<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Guidebody extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guidebody', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('guideid');
			$table->integer('section_num');

			$table->string('section_head');
			$table->string('section_body');
			$table->string('section_foot');
			
			$table->integer('gifid');
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
		//
		Schema::drop('guidebody');
	}

}
