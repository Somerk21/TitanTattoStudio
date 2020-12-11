

<!DOCTYPE html>
<html>
<head>
<title>Titan Tatto Studio</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link rel="stylesheet" type="text/css" href="{{ asset('login/librerias/bootstrap/css/bootstrap.css')}}">  
	<link rel="stylesheet" type="text/css" href="{{ asset('login/librerias/alertifyjs/css/alertify.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/librerias/alertifyjs/css/themes/default.css')}}">

	<script src="{{ asset('login/librerias/jquery-3.5.1.min.js')}}" ></script>
	<script src="{{ asset('login/librerias/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{ asset('login/librerias/alertifyjs/alertify.js')}}"></script>

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="{{ asset('login/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{ asset('login/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
	

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Titan Tatto Studio</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				
					
					<div class="bottom">
						<button class="btn" id="registrar"><a href="{{ url('loginn/registrar') }}">Registrar</a></button>
						<br><br>
						<button class="btn" id="login" ><a href="{{ url('loginn/login') }}">Inicia Sesion</a></button>
					</div>
					
					</div>
				
			</div>
			
		</div>
		
	</div>
</div>	
</body>
</html>

<!-- <script type="text/javascript">

$(document).ready(function(){


$('#login').click(function(){

location.replace('loginn/login')

});
$('#registrar').click(function(){

location.replace('loginn/registrar')

});


}); 


</script> -->