<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	@yield('styles')
	<link rel="stylesheet" href="{{ url('login/css/app.css') }}">

<!-- 	@include('partials.nav') -->

</head>
<body>

	<div class="container">
		@yield('content')
	</div>

	@include('partials.footer')

	@yield('scripts')
	
</body>
</html>