<?php

class Create_Enrolments {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enrolments', function($table) {
			$table->integer('oid')->unsigned();
			$table->integer('sid')->unsigned();
			$table->integer('grade')->default(0);


			$table->foreign('oid')->references('id')->on('offerings');
			$table->foreign('sid')->references('id')->on('students');
			$table->primary(array('oid', 'sid'));
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enrolments');
	}

}