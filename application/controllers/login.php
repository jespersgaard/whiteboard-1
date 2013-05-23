<?php

class Login_Controller extends Base_Controller{
	public $restful = true;
	
	public function get_index(){
		// echo "test";
		return View::make('login_page');
	}

	public function post_index(){
		// get POST data
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		if (Auth::attempt($userdata))
		{
			$user = DB::table('users')
				->join('user_roles', 'users.role', '=', 'user_roles.id')
				->where_username(Auth::user()->username)
				->first();
			$role = $user->name;
			return Redirect::to($role);
		}
		else
		{
			// authentication failure
			return Redirect::to('login')
				->with('login_errors', true);
		}
	}
}