<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Login</title>

        <!-- Bootstrap Core CSS -->

     
<!-- end: Css -->


        <link rel="stylesheet" href="{{asset('Company/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('Company/css/style.css')}}">
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{asset('Company/css/plugins/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('Company/css/plugins/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('Company/css/plugins/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('Company/css/plugins/fullcalendar.min.css')}}">
        
    
    </head>
	<body>

	
<div class="container">

<form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
  <div class="panel periodic-login">
      <div class="panel-body text-center">
          <h4 class="atomic-symbol">Hi</h4>
          <h1>LOGIN</h1>

          <i class="icons icon-arrow-down"></i>
          <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input  placeholder="Email address"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror            
            <span class="bar"></span>
          </div>
          <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="bar"></span>
            
          </div>
          <label class="pull-left">
          </label>
          <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
            </button>
      </div>
        <div class="text-center" style="padding:5px;">
            <a href="/register">| Signup</a>
        </div>
  </div>
</form>

</div>





		<!-- jQuery Plugins -->

        <script src="{{asset('Company/js/plugins/jquery.vmap.sampledata.js')}}"></script>
        <script src="{{asset('Company/js/plugins/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('Company/js/plugins/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('Company/js/plugins/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('Company/js/plugins/chart.min.js')}}"></script>
		<script src="{{asset('Company/js/plugins/fullcalendar.min.js')}}"></script>
		<script src="{{asset('Company/js/plugins/moment.min.js')}}"></script>
		<script src="{{asset('Company/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('Company/js/jquery.ui.min.js')}}"></script>
		<script src="{{asset('Company/js/jquery.min.js')}}"></script>
        <script src="{{asset('Company/js/main.js')}}"></script>
        

	</body>
</html>
