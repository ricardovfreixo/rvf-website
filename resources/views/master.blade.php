<!DOCTYPE html>
<html>

	<head>
		<title>{{$title ?? 'rvf'}}</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
	</head>

	<body>
		@include('partials.header')

		<div class="container">
			<div id="app"><App /></div>
		</div>

		@include('partials.footer')

		<script type="text/javascript" src="{{mix('/js/app.js')}}"></script>

	</body>

</html>