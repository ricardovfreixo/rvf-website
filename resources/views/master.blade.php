<!DOCTYPE html>
<html>
<head>
	<title>{{$title ?? 'rvf'}}</title>
	<link rel="stylesheet" type="text/css" href="{{url('/css/app.css')}}">
	@stack('extracss')
</head>
<body>
	<div class="wrapper">
		<div class="box header">Header</div>
		<div class="box sidebar">Sidebar</div>
		<div class="box content">Content
		    <br /> More content than we had before so this column is now quite tall.</div>
		<div class="box footer">Footer</div>
	</div>
	<script type="text/javascript" src="{{url('/js/app.js')}}"></script>
	@stack('extrajs')
</body>
</html>