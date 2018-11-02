<!DOCTYPE html>
<html>
<head>
	<title>{{$title ?? 'rvf'}}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{url('/css/app.css')}}">
	@stack('extracss')
</head>
<body>
	@include('partials.header')
	<div class="container">
		@yield('content')
		
	</div>
	@include('partials.footer')
	<script type="text/javascript" src="{{url('/js/app.js')}}"></script>
	@stack('extrajs')
</body>
</html>