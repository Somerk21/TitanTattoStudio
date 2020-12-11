<!doctype html>
<html lang="en">
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

                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('entrar') }}">
                    @csrf
                        <div class="icon1">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                <input id="email" type="email" class="" name="email" value="" required autocomplete="email" autofocus>
                        </div>

                        <div class="icon1">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->


                                <input id="password" type="password" class="" name="password" required autocomplete="current-password">

                        </div>

                        <div class="bottom">

                                <button type="submit" class="btn">
                                    Iniciar sesion
                                </button>

                    </form>

                                    <a class="nav-link" href="registrar">¿Aun no tienes cuenta?</a>

                    </div>
</div>
</div>
</div>
</div>

