@layout('master')

@section('title')
Add a Course
@endsection

@section('content')
{{ Form::open('admin/add_course') }}
	<!-- check for login errors-->
	@if (Session::has('invalidated'))
		<span class = "error">One or more fields are invalid. Please try again.</span>
	@elseif (Session::has('insert_fail'))
		<span class = "error">There was a failure inserting. Please try again.</span>
	@endif

	<p>{{ Form::label('code', 'Course Code') }}</p>
	<p>{{ Form::text('code') }} </p>

	<p>{{ Form::label('name', 'Course Title') }}</p>
	<p>{{ Form::text('name') }} </p>

	<p>{{ Form::label('description', 'Course Description') }}</p>
	<p>{{ Form::textarea('description') }} </p>

	<!-- submit button-->
	<p>{{ Form::submit('Add Course', array("class" => "submit")) }}</p>

{{ Form::close() }}

@endsection