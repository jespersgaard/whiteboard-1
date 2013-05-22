@layout('master')

@section('title')
Home
@endsection

@section('login')
{{ Form::open('login') }}

	<!-- check for login errors-->
	@if (Session::has('login_errors'))
		<span class = "error">Username or password incorrect. Please try again.</span>
	@endif

	<p>{{ Form::label('username', 'Username') }}</p>
	<p>{{ Form::text('username') }} </p>

	<p>{{ Form::label('password', 'Password') }}</p>
	<p>{{ Form::password('password') }} </p>

	<!-- submit button-->
	<p>{{ Form::submit('Log In', array("class" => "submit")) }}</p>

{{ Form::close() }}
@endsection

@section('content')
<p class = "main">
	{{ "Welcome to WhiteBoard. An app for classrooms, instructors and students." }}
	<div class ="large_button">{{HTML::link_to_action('login', 'LOG IN')}}</div>
</p>
@endsection