<?php

class Seed_Courses {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('courses')->insert(array(
			array('code' => 'CSC108',
				'name' => 'Intro to Programming'),
			array('code' => 'CSC120',
				'name' => 'Computer Science for the Sciences'),
			array('code' => 'CSC148',
				'name' => 'Introduction to Computer Science'),
			array('code' => 'CSC150',
				'name' => 'Accelerated Introduction to Computer Science'),
			array('code' => 'CSC165',
				'name' => 'Mathematical Expression and Reasoning for Computer Science'),
			array('code' => 'CSC200',
				'name' => 'Economic and Social Networks: Models and Applications'),
			array('code' => 'CSC207',
				'name' => 'Software Design'),
			array('code' => 'CSC209',
				'name' => 'Software Tools and Systems Programming'),
			array('code' => 'CSC236',
				'name' => 'Introduction to the Theory of Computation'),
			array('code' => 'CSC240',
				'name' => 'Enriched Introduction to the Theory of Computation'),
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('courses')->delete();
	}

}