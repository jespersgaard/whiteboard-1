<?php

class Create_User_Roles {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_roles', function($table) {
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
		Schema::drop('user_roles');
	}

}