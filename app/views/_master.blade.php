<!doctype html>
<html>
<head>

	<title>@yield('title','Make your own survey')</title>

	<link rel='stylesheet' href='/css/styles.css' type='text/css'>
		
	@yield('head')

</head>

<body>

	<div id="page-wrap">
	<div class="header">
			<h1><a href="/">Surveyllance</a></h1>			
	</div>

	@yield('content')

	@yield('body')

	@yield('footer')
	</div>

</body>

</html>