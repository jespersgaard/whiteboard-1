<?php

class Seed_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			array(
				'fname' => 'Tarek',
				'lname' => 'Abdelrahman',
				'username' => 'tsa',
				'email' => "tsa@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 2),
			array(
				'fname' => 'Fahiem',
				'lname' => 'Bacchus',
				'username' => 'fbacchus',
				'email' => "fbacchus@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 2),
			array(
				'fname' => 'Ronald',
				'lname' => 'Baecker',
				'username' => 'rmb',
				'email' => "rmb@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 2),
			array(
				'fname' => 'Ravin',
				'lname' => 'Balakrishnan',
				'username' => 'ravin',
				'email' => "ravin@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 2),
			array(
				'fname' => 'Gary',
				'lname' => 'Baumgartner',
				'username' => 'gfb',
				'email' => "gfb@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 2),
			array(
				'fname' => 'Moomoo',
				'lname' => 'Pablo',
				'username' => 'moomoo',
				'email' => "moomoo@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 3),
			array(
				'fname' => 'Luis',
				'lname' => 'Pablo',
				'username' => 'pablolui',
				'email' => "pablolui@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 3),
			array(
				'fname' => 'Christine',
				'lname' => 'Huang',
				'username' => 'huangchr',
				'email' => "huangchr@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 3),
			array(
				'fname' => 'Oinky',
				'lname' => 'McOinkster',
				'username' => 'mcoinky',
				'email' => "mcoinky@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 3),
			array(
				'fname' => 'Dexter',
				'lname' => 'Morgan',
				'username' => 'dmorgan',
				'email' => "dmorgan@whiteboard.com",
				'password' => Hash::make('password'),
				'role' => 3),
		));

		DB::table('instructors')->insert(array(
			array(
				'iid' => '333330',
				'uid' => '2'
				),
			array(
				'iid' => '333331',
				'uid' => '3'
				),
			array(
				'iid' => '333332',
				'uid' => '4'
				),
			array(
				'iid' => '333333',
				'uid' => '5'
				),
			array(
				'iid' => '333334',
				'uid' => '6'
				),
		));

		DB::table('students')->insert(array(
			array(
				'sid' => '233330',
				'uid' => '7'
				),
			array(
				'sid' => '233331',
				'uid' => '8'
				),
			array(
				'sid' => '233332',
				'uid' => '9'
				),
			array(
				'sid' => '233333',
				'uid' => '10'
				),
			array(
				'sid' => '233334',
				'uid' => '11'
				),
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->delete();
	}

}