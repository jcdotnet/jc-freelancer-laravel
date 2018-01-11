<!doctype html>
<html>
	<head>
		<title>Admin area | Jose Carlos Román Rubio</title>
		<meta charset="UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
	    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
		<link rel="stylesheet" href="{{ asset('css/bundle-admin.css') }}">
		@yield('head')
	</head>
	<body>		
		@include('includes/header-admin')

		@yield('content')
		
		@include('includes/footer-admin')
		
		<script>
			var baseUrl = "{{ URL::to('/') }}"; // BASE URL FOR AJAX CALLS
			var token = "{{ Session::token() }}";
		</script>
		<script src="{{ asset('js/bundle-admin.js') }}"></script>
	</body>
</html>