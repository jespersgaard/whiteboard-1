@layout('master')

@section('title')
View All Students
@endsection

@section('content')
	
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Student ID</th>
		</tr>
		@foreach ($args as $user)
		<tr>
			<td>{{ $user->fname }}</td>
			<td>{{ $user->lname }}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->sid }}</td>
		</tr>
		@endforeach
	</table>

@endsection