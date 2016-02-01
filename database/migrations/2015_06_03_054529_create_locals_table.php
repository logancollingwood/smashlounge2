<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locals', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('region')->nullable();
			$table->string('profileid', 130)->nullable();
			$table->string('name', 44)->nullable();
			$table->decimal('latitude', 10, 7)->nullable();
			$table->decimal('longitude', 11, 7)->nullable();
			$table->integer('game')->nullable();
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
		Schema::drop('locals');
	}

}
