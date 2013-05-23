<?php

class Student_Controller extends Base_Controller{
	public $restful = true;
	
	public function __construct(){
		$this->filter('before', 'auth');
	}

	public function get_index(){
		return View::make('student.index');
	}
}