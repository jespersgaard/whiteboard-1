<?php

class Create_Courses {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function($table) {
			$table->increments('id');

			$table->string('code', 10)->unique();
			$table->string('name');
			$table->text('description');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courses');
	}

}