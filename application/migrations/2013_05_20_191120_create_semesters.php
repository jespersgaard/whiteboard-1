<?php

class Create_Semesters {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('semesters', function($table) {
			// auto-increment id
			$table->increments('id');

			$table->string('name', 50)->unique();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('semesters');
	}

}