<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmissionsvodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submissionsvod', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('url', 260);
			$table->string('title', 130);
			$table->string('credit', 160);
			$table->integer('typeid');
			$table->integer('dataid');
			$table->string('description', 260);
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
		Schema::drop('submissionsvod');
	}

}
