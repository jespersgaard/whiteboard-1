<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			// auto-increment id
			$table->increments('id');

			$table->string('fname', 50);
			$table->string('lname', 50);
			$table->string('username');
			$table->string('email', 128)->unique();
			$table->string('password', 64);
			$table->integer('role')->unsigned();

			$table->foreign('role')->references('id')->on('user_roles');
		});

		DB::table('users')->insert(array(
			'fname' => 'Mister',
			'lname' => 'Bear',
			'username' => 'admin',
			'email' => 'misterbear@whiteboard.com',
			'password' => Hash::make('password'),
			'role' => 1,
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}