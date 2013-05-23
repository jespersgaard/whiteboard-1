@layout('master')

@section('title')
Log In
@endsection

@section('content')

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