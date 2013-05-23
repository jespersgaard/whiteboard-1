@layout('master')

@section('title')
Admin Control Panel
@endsection

@section('content')
<p class = "main_normal">
Create {{ HTML::link_to_action('admin@add_course', 'a new course')}}
<br>
Add {{ HTML::link_to_action('admin@add_student', 'a student')}}
<br>
Add {{ HTML::link_to_action('admin@add_instructor', 'an instructor')}}
<br><br>
Assign course offerings<br><br>
View {{ HTML::link_to_action('admin@view_users', 'all users')}}<br>
View {{ HTML::link_to_action('admin@view_students', 'all students')}}<br>
View {{ HTML::link_to_action('admin@view_instructors', 'all instructors')}}<br>
View {{ HTML::link_to_action('admin@view_courses', 'all courses')}}<br>
@endsection