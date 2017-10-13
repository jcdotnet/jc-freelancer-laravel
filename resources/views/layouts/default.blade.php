<!doctype html>
<html lang="{{ Config::get('app.locale') }}">
	<head>
		@yield('head')
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">		
		<link rel="stylesheet" href="{{ asset('css/bundle.css') }}">
		
		@yield('styles')
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-83909737-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>	
		@include('includes/header')
        
		@yield('content')
			
		@include('includes/footer')
		@include('includes/cookie-notice')
		
		@yield('scripts-before')
		
		<script>
			var baseUrl = "{{ url('/', Config::get('app.locale')) }}"; // BASE URL FOR AJAX CALLS
			var token = "{{ Session::token() }}";	
		</script>
		<script src="{{ asset('js/bundle.js') }}"></script>
		
		@yield('scripts-after')
	</body>
</html>