<?php 	session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Titan Tatto Studio</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Registar nuevo usuario</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="#" method="post">


					

						<label class="label50" style="color: white">Usuario:</label>
						<div class="icon1">
						<input type="text" id="usuario" required=""/>
					</div>

					

				<label class="label50" style="color: white">Clave:</label>
					<div class="icon1">			
						<input type="password" id="clave"  required=""/>
					</div>
	
					<div class="bottom">
						<button class="btn">Registrar</button>
					</div>
			
					
				</form>	
			</div>
			
		</div>
		
	</div>
</div>	
<!-- //main -->

</body>
</html>

<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

  	function conexion(){

  			$sever="localhost";
  			$use="root";
  			$pass="";
  			$bd="titan_tatto_studio";



  			$conexion=mysqli_connect($sever,$use,$pass,$bd);

  			return $conexion;
      }

  			$conexion = conexion();

 if ($usuario !='' ) {
 	$sql = "INSERT INTO usuario (ID_USUARIO, USUARIO, CLAVE) VALUES ('', '123', '$clave')";
mysqli_query($conexion, $sql);
      echo "se creo un nuevo usuario";

mysqli_close($conexion);
 	# code...
 }



?>