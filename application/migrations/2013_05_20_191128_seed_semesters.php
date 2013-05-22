<?php

class Seed_Semesters {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('semesters')->insert(array(
			array('name' => 'fall'),
			array('name' => 'winter'),
			array('name' => 'summer_f'),
			array('name' => 'summer_s'),
		));

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('semesters')->delete();
	}

}