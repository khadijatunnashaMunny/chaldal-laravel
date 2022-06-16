
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Chaldal shop Admin panel</title>

        <!-- Bootstrap Core CSS -->

    

        <link rel="stylesheet" href="{{asset('Admin/vendor/font-awesome/css/font-awesome.min.css')}}">

        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{asset('Admin/css/font.css')}}">
        <link rel="stylesheet" href="{{asset('Admin/css/style.default.css')}}">
        <link rel="stylesheet" href="{{asset('Admin/css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('Admin/vendor/bootstrap/css/bootstrap.min.css')}}">

    
    </head>
	<body>

	
		<!-- SECTION -->
            @yield('admin_content')
		<!-- /SECTION -->

	
		<!-- jQuery Plugins -->


		<script src="{{asset('Admin/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('Admin/vendor/popper.js/umd/popper.min.js')}}"></script>
		<script src="{{asset('Admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('Admin/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
		<script src="{{asset('Admin/vendor/chart.js/Chart.min.js')}}"></script>
		<script src="{{asset('Admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('Admin/js/front.js')}}"></script>
        

	</body>
</html>
