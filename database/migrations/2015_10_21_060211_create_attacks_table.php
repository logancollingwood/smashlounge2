<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attacks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('charid');
			$table->integer('gameid');
			$table->integer('gif_id');
			
			$table->string('description', 450);
			$table->string('inputs', 450);
			$table->integer('links_to');
			$table->integer('links_from');
			$table->integer('movetype');

			// -- new shit -- \\
			$table->integer('active_start');
			$table->integer('active_end');

			$table->integer('hit_start');
			$table->integer('hit_end');

			$table->integer('iasa');

			$table->integer('second_window_start');
			$table->integer('second_window_end');

			$table->integer('charge_frame');

			$table->integer('invincible_start');
			$table->integer('invincible_end');

			$table->integer('landlag');
			$table->integer('lcancel');

			$table->boolean('auto_cancelable');
			$table->integer('auto_cancel_start');
			$table->integer('auto_cancel_end');

			$table->integer('grab_start');
			$table->integer('grab_end');
			
			$table->integer('lag_on_release');
			$table->integer('reflection_lag');

			$table->boolean('jcable');

			$table->boolean('grounded');


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
		Schema::drop('attacks');
	}

}
