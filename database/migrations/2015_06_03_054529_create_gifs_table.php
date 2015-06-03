<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGifsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gifs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('typeid')->default(1);
			$table->integer('dataid')->default(0);
			$table->string('source', 260);
			$table->integer('submittedby');
			$table->string('url', 300);
			$table->string('description', 400);
			$table->timestamp('update_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('score');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gifs');
	}

}
