<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="Personal Blog of iqbal permana">
	    <meta name="author" content="M iqbal Permana">
		<title>@yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	    <link href="{{asset('css/aos.css')}}" rel="stylesheet">
	    <link href="{{asset('css/style.css')}}" rel="stylesheet">
		@yield('styles')
	</head>
	<body>
		<div>
			@yield('content')
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="{{asset('js/aos.js')}}"></script>
		<script src="{{asset('js/script.js')}}"></script>
		@stack('scripts')
	</body>
	<footer>
	</footer>
</html>