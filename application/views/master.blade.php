<!doctype html>
<html>
	<head>
		<title>@yield('title')</title>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Roboto' rel='stylesheet' type='text/css'>
		{{ HTML::style('css/master.css') }}
	</head>
	<body>
		<div class = "header">
			<div class = "wrapper">
				<h1 id = "logo">WhiteBoard // <font class ="title">@yield('title')</font>
				</h1>
				@if(Auth::check())
					<span class = "greeting">
						Logged in as <i> {{ Auth::user()->fname, " ", Auth::user()->lname}}</i>
					</span>
					<span class = "logout">{{ HTML::link_to_action('logout', 'LOGOUT') }}</span>
				@else
					<span class = "greeting"><i>Currently not logged in.</i></span>
				@endif
			</div>
		</div>
		<div class = "nav">
			<div class = "wrapper">
				@yield('nav')
			</div>
		</div>
		<div class = "content">
			<div class = "wrapper">
				@yield('content')
			</div>
		</div>
		<div class = "footer">
			<div class = "wrapper">
				<div>Copyright 2013 Luis Pablo</div>
			</div>
		</div>
	</body>
</html>