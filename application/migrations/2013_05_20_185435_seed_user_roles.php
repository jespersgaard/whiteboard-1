<?php

class Seed_User_Roles {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('user_roles')->insert(array(
			array('name' => 'admin'),
			array('name' => 'instructor'),
			array('name' => 'student'),
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('user_roles')->delete();
	}

}