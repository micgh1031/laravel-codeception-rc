<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('developers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('url');
			$table->text('bio');
			$table->string('email');
			$table->text('work_place');
			$table->string('code_name');
			$table->text('tags');
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
		Schema::drop('developers');
	}

}
