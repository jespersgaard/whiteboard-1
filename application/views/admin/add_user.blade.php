@layout('master')

@section('title')
Add a User
@endsection

@section('content')
{{ Form::open('admin/add_user') }}
	<!-- check for login errors-->
	@if (Session::has('invalidated'))
		<span class = "error">One or more fields are invalid. Please try again.</span>
	@elseif (Session::has('insert_fail'))
		<span class = "error">There was a failure inserting. Please try again.</span>
	@endif

	<p>{{ Form::label('fname', 'First Name') }}</p>
	<p>{{ Form::text('fname') }} </p>

	<p>{{ Form::label('lname', 'Last Name') }}</p>
	<p>{{ Form::text('lname') }} </p>

	<p>{{ Form::label('username', 'Username') }}</p>
	<p>{{ Form::text('username') }} </p>

	<!-- submit button-->
	<p>{{ Form::submit('Add User', array("class" => "submit")) }}</p>

{{ Form::close() }}

@endsection