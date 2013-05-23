<?php

class Admin_Controller extends Base_Controller{
	public $restful = true;

	public function __construct()
	{
	    $this->filter('before', 'auth');
	}

	public function get_index(){

		return View::make('admin.index');
	}

	public function get_view_users(){
		$users = DB::table('users')
			->join('user_roles', 'users.role', '=', 'user_roles.id')
			->get(array('users.fname', 'users.lname', 'users.username', 'users.email', 'user_roles.name'));

		return View::make('admin.view_users')
			->with('args', $users);
	}

	public function get_view_students(){
		$students = DB::table('users')
			->join('students', 'users.id', '=', 'students.uid')
			->where_role(3)
			->get(array('users.fname', 'users.lname', 'users.username', 'students.sid'));

		return View::make('admin.view_students')
			->with('args', $students);
	}

	public function get_view_instructors(){
		$instructors = DB::table('users')
			->join('instructors', 'users.id', '=', 'instructors.uid')
			->where_role(2)
			->get(array('users.fname', 'users.lname', 'users.username', 'instructors.iid'));

		return View::make('admin.view_instructors')
			->with('args', $instructors);
	}

	public function get_view_courses(){
		$courses = DB::table('courses')
			->get(array('code', 'name'));

		return View::make('admin.view_courses')
			->with('args', $courses);
	}

	public function get_add_course(){
		return View::make('admin.add_course');
	}

	public function post_add_course(){
		$rules = array(
			'code' => 'required',
			'name' => 'required',
		);

		$input = Input::all();
		$validation = Validator::make($input, $rules);

		
		if ($validation->fails())
	    {
	    	return Redirect::to('admin/add_course')->with('invalidated', true);
	    }
	    else
	    {
	    	DB::table('courses')->insert(
	    		array(
	    			'code' => Input::get('code'),
	    			'name' => Input::get('name'),
	    			'description' => Input::get('description'),
	    	));

			return Redirect::to('admin');			
	    }
	}

	public function get_add_student(){
		Session::put('role', 3);
		return View::make('admin.add_user');
	}

	public function get_add_instructor(){
		Session::put('role', 2);
		return View::make('admin.add_user');
	}

	public function get_add_user(){
		if(Session::get('role')){
			return View::make('admin.add_user');
		}
		else{
			return Response::error('403');	
		}		
	}

	public function post_add_user(){
		$rules = array(
			'fname' => 'required|max:50|alpha',
			'lname' => 'required|max:50|alpha',
			'username' => 'required|max:200|unique:users'
		);
		$input = Input::all();
		$validation = Validator::make($input, $rules);

		if ($validation->fails())
	    {
	        return Redirect::to('admin/add_user')->with('invalidated', true);
	    }
	    else
	    {
	    	$role = Session::get('role');

	    	$email = strtolower(Input::get('fname'));
	    	$email = $email . "." . strtolower(Input::get('lname')) . "@whiteboard.com";
	    	
	    	$id = DB::table('users')->insert_get_id(
	    		array(
	    			'fname' => Input::get('fname'),
	    			'lname' => Input::get('lname'),
	    			'username' => Input::get('username'),
	    			'password' => Hash::make('password'),
	    			'email' => $email,
	    			'role' => $role,
	    	));

	    	$new_id = mt_rand(10000, 50000);

	    	if($role == 2){
	    		DB::table('instructors')->insert(
	    			array(
	    				'uid' => $id,
	    				'iid' => $role . $new_id
	    		));
	    	}
	    	else{
	    		DB::table('students')->insert(
	    			array(
	    				'uid' => $id,
	    				'sid' => $role . $new_id
	    		));
	    	}

			Session::forget('role');
			return Redirect::to('admin');			
	    }
	}
}