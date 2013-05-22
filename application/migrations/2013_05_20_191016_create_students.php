<?php

class Create_Students {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function($table) {
			$table->increments('id');

			$table->integer('sid')->unique();
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
		Schema::drop('students');
	}

}