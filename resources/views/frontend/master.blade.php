
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Chaldal shop</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/blue.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/rateit.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">

        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        </head>
	<body>

		<!-- HEADER -->
            @include('frontend.header')
		<!-- /HEADER -->
	

		<!-- SECTION -->
            @yield('content')
		<!-- /SECTION -->

	
		<!-- FOOTER -->
            @include('frontend.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->


		<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/lightbox.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
		<script src="{{asset('js//wow.min.js')}}"></script>
		<script src="{{asset('js/scripts.js')}}"></script>

        <script src="{{asset('js/jquery.rateit.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
		<script src="{{asset('js/jquery.easing-1.3.min.js')}}"></script>
		<script src="{{asset('js/echo.min.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-hover-dropdown.min.js')}}"></script>

	</body>
</html>
