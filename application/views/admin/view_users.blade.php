@layout('master')

@section('title')
View All Users
@endsection

@section('content')
	
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Role</th>
		</tr>
		@foreach ($args as $user)
		<tr>
			<td>{{ $user->fname }}</td>
			<td>{{ $user->lname }}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->name }}</td>
		</tr>
		@endforeach
	</table>

@endsection