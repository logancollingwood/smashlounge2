<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vods', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('url', 260);
			$table->string('title', 130);
			$table->timestamp('update_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('score');
			$table->string('credit', 160);
			$table->integer('typeid');
			$table->integer('dataid');
			$table->string('submitted_by', 130);
			$table->string('description', 260);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vods');
	}

}
