<!DOCTYPE HTML>
<html>
<head>
<title>Gloria Mandiri Technology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('butstrep/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<script type="text/javascript" src="{{asset('butstrep/js/bootstrap.min.js') }}" ></script>
</head>
<body>
<div class = "header">
@include('template.headers')
</div>
<div class = "container">
<div id= "bestSeller">
@include('bestseller');
</div>
<div id= "recommendedItem">
@include('recommendedItem');
<div id ="menuItem"></div>
<div id ="showItem"></div>

</div>

</div>
<div class = "footer"></div>
	

</body>
</html>