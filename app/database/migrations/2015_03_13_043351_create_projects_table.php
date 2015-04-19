<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			$table->engine = 'MyISAM';

			$table->enum('type', array(
			    'art',
			    'crafts',
			    'dance',
			    'comics',
			    'design',
			    'fashion',
			    'video',
			    'food',
			    'games',
			    'journalism',
			    'music',
			    'photography',
			    'technology',
			    'publishing',
			    'other'
			))->index();

			$table->string('title')->index();

			$table->string('country')->index();

			$table->text('comment');

			$table->integer('duration');

			$table->integer('goal');

			$table->decimal('current');

			$table->boolean('backed');

			$table->string('video');

			$table->integer('views')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
