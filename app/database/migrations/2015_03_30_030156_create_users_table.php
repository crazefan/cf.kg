<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('email')->unique();

			$table->string('password', 60);

			$table->string('username')->unique();

			$table->boolean('isAdmin');

			$table->boolean('isActive')->index();

			$table->string('activationCode');

			$table->rememberToken(); //cookie для пользователя

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
		Schema::drop('users');
	}

}
