<?php

class Create_Offerings {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offerings', function($table) {
			// auto-increment id
			$table->increments('id');

			$table->integer('cid')->unsigned();
			$table->integer('iid')->unsigned();
			$table->integer('sem')->unsigned();
			$table->string('section_id')->nullable();

			$table->foreign('cid')->references('id')->on('courses');
			$table->foreign('iid')->references('id')->on('instructors');
			$table->foreign('sem')->references('id')->on('semesters');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('offerings');
	}

}