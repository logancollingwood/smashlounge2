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
			$table->string('slug');
			$table->integer('typeid');
			$table->integer('dataid');
			$table->string('description');

			$table->string('author1_sponsor');
			$table->string('author1_name');
			$table->string('author1_twitter');

			$table->string('author2_sponsor');
			$table->string('author2_name');
			$table->string('author2_twitter');

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
		Schema::drop('guides');
	}

}
