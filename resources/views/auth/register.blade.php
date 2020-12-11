<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link rel="stylesheet" type="text/css" href="{{ asset('loginn/librerias/bootstrap/css/bootstrap.css')}}">  
	<link rel="stylesheet" type="text/css" href="{{ asset('loginn/librerias/alertifyjs/css/alertify.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('loginn/librerias/alertifyjs/css/themes/default.css')}}">

	<script src="{{ asset('loginn/librerias/jquery-3.5.1.min.js')}}" ></script>
	<script src="{{ asset('loginn/librerias/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{ asset('loginn/librerias/alertifyjs/alertify.js')}}"></script>

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="{{ asset('loginn/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('loginn/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
	

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
</head>
<body>



<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Titan Tatto Studio</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                             <!-- <label for="name" class="">{{ __('Name') }}</label>  -->

                            <div class="icon1">
                                <input id="name" placeholder="Nombre" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                             <!-- <label for="email" class="">{{ __('E-Mail Address') }}</label>  -->

                            <div class="icon1">
                                <input id="email" placeholder="Direccion de correo electronico"  type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                             <!-- <label for="password" class="">{{ __('Password') }}</label>  -->

                            <div class="icon1">
                                <input id="password" placeholder="Contraseña"  type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="f">
                             <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>  -->

                            <div class="icon1">
                                <input id="password-confirm" placeholder="Confirmar contraseña"  type="password" class="" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="bottom">
                            
                                <button type="submit" class="btn">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

