@layout('master')

@section('title')
View All Courses Registered
@endsection

@section('content')
	
	<table>
		<tr>
			<th>Course Code</th>
			<th>Course Title</th>
		</tr>
		@foreach ($args as $item)
		<tr>
			<td>{{ $item->code }}</td>
			<td>{{ $item->name }}</td>
		</tr>
		@endforeach
	</table>

@endsection