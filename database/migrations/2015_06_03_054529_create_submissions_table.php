<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submissions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('url', 90);
			$table->string('source', 30);
			$table->string('description', 300);
			$table->integer('pageid');
			$table->integer('dataid');
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
		Schema::drop('submissions');
	}

}
