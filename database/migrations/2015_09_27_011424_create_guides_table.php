<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guides', function(Blueprint $table)
		{
			$table->increments('id');
			/*
				0 for tech guide
				1 for char guide
			*/
			$table->string('name');

			$table->integer('typeid');
			$table->integer('dataid');
			$table->string('description');

			$table->string('author');

			$table->timestamps();
			$table->longText('guide');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guides');
	}

}
