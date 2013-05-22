@layout('master')

@section('title')
Admin Control Panel
@endsection

@section('content')
<p class = "main_normal">
Create {{ HTML::link_to_action('admin', 'a new course')}}
<br>
Add {{ HTML::link_to_action('admin@add_student', 'a student')}}
<br>
Add {{ HTML::link_to_action('admin@add_instructor', 'an instructor')}}

@endsection