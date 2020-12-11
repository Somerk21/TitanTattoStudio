<?php 	session_start();?>
<!DOCTYPE html>
<html>

<head>
    <title>Titan Tatto Studio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>

    <!-- Custom Theme files -->
    <link href="{{ asset('login/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('login/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
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
                    <form action="{{ url('usuarios/store') }}" method="get">

                        <label class="label50" style="color: white">Usuario:</label>
                        <div class="icon1">
                            <input type="text" id="usuario" required="" />
                        </div>

                        <label class="label50" style="color: white">Clave:</label>
                        <div class="icon1">
                            <input type="password" id="clave" required="" />
						</div>
						
						<label class="label50" style="color: white">Nombre:</label>
                        <div class="icon1">
                            <input type="text" id="Nombre" required="" />
						</div>
						
						<label class="label50" style="color: white">Apellido:</label>
                        <div class="icon1">
                            <input type="text" id="Apellido" required="" />
						</div>
						
						<label class="label50" style="color: white">Direccion:</label>
                        <div class="icon1">
                            <input type="text" id="Direccion" required="" />
						</div>
						
						<label class="label50" style="color: white">Correo:</label>
                        <div class="icon1">
                            <input type="mail" id="Correo" required="" />
						</div>
						
						<label class="label50" style="color: white">Telefono:</label>
                        <div class="icon1">
                            <input type="number" id="Telefono" required="" />
						</div>
						
						<label class="label50" style="color: white">Documento:</label>
                        <div class="icon1">
                            <input type="number" id="Documento" required="" />
						</div>
						
						<label class="label50" style="color: white">Fecha de nacimiento:</label>
                        <div class="icon1">
                            <input type="date" id="Fecha" required="" />
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
if(isset($_POST['cliente'])){

	$Nombre_Cliente=$_POST['Nombre_Cliente'];
	$Apellido_Cliente=$_POST['Apellido_Cliente'];
	$Direccion_Cliente=$_POST['Direccion_Cliente'];
	$Correo_Cliente=$_POST['Correo_Cliente'];
	$Telefono_Cliente=$_POST['Telefono_Cliente'];
	$Documento_Cliente=$_POST['Documento_Cliente'];
	$Telefono_Cliente=$_POST['Fecha_Nacimiento'];
	

	


	
	$insertar = "INSERT INTO cliente (Nombre_Cliente,Apellido_Cliente,Direccion_Cliente,Correo_Cliente,Telefono_Cliente,Documento_Cliente,Fecha_Nacimiento) VALUES ('$Nombre_Cliente','$Apellido_Cliente', '$Direccion_Cliente','$Correo_Cliente','$Documento_Cliente','$Fecha_Nacimiento')";	

mysqli_query($conexion,$insertar);
				echo '<script type="text/javascript">alert("El se ha resgistrado '.$cliente.' ");</script>';
				}

mysqli_close($conexion);
?>