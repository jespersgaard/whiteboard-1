<?php

class Create_Instructors {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instructors', function($table) {
			$table->increments('id');

			$table->integer('iid')->unique();
			$table->integer('uid')->unsigned();

			$table->foreign('uid')->references('id')->on('users');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('instructors');
	}

}