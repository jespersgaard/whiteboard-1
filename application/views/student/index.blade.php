@layout('master')

@section('title')
Home Page
@endsection

@section('content')
<p class = "main_normal">
What's up, {{ Auth::user()->fname, " ", Auth::user()->lname }}

@endsection