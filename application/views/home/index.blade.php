@layout('master')

@section('title')
Home
@endsection

@section('content')
<p class = "main">
	{{ "Welcome to WhiteBoard. An app for classrooms, instructors and students." }}
	@if(Auth::check() == false)
		<div class ="large_button">{{HTML::link_to_action('login', 'LOG IN')}}</div>
	@else
		<?php 
			$current_user = DB::table('users')
				->join('user_roles', 'users.role', '=', 'user_roles.id')
				->where_email(Auth::user()->email)
				->first();
			$role = $current_user->name;

			if($role == "admin")
			{
				echo "<div class =\"large_button\">"?>
				{{HTML::link_to_action('admin', 'Log In to Admin CP')}}<?= "</div>";
			}
			elseif ($role == "student") {
				echo "<div class =\"large_button\">"?>
				{{HTML::link_to_action('student', 'Continue to Student Home')}}<?= "</div>";
			}
			else{
				echo "<div class =\"large_button\">"?>
				{{HTML::link_to_action('instructor', 'Continue to Instructor Home')}}<?= "</div>";
			}
		?>
	@endif
	
</p>
@endsection