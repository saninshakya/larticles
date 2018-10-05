<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name', 'Larticles') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
	<title>Larticles</title>
</head>
<body>
	<div id="app">
		@include('inc.navbar')
			<div class="container">
				@include('inc.messages')
				@yield('content')
			</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>