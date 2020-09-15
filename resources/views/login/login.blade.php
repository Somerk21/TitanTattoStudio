<!DOCTYPE html>
<html>
<head>
<title>Titan Tatto Studio</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">  
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

	<script src="librerias/jquery-3.5.1.min.js" ></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

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
				
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" placeholder="Usuario" name="ID_USUARIO"  id="ID_USUARIO" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span> 
						<input type="password" placeholder="Contraseña" name="CLAVE" id="CLAVE" required=""/>
					</div>
	
					<div class="bottom">
						<button class="btn" id="login" name="login" >Entrar</button>
					</div>
					<samp id="result" ></samp>
					<div class="links">
						<p class="right"><a href="registrar.php">Registrar!</a></p>
						<div class="clear"></div>
					</div>
				
			</div>
			
		</div>
		
	</div>
</div>	
</body>
</html>

<script type="text/javascript">

$(document).ready(function(){


$('#login').click(function(){


var ID_USUARIO = $('#ID_USUARIO').val();
var CLAVE = $('#CLAVE').val();

cadena= "ID_USUARIO=" + ID_USUARIO + "&CLAVE=" + CLAVE;

if ($.trim(ID_USUARIO).length < 1){
	alertify.alert('UPSS','debes digitar Usuario');

}

if ($.trim(CLAVE).length < 1 ){
	alertify.alert('UPSS','debes digitar contraseña');

}
if ($.trim(ID_USUARIO).length > 0 && $.trim(CLAVE).length > 0 ){
	

	$.ajax({
		url:"php/validar.php",
		method:"post",
		data:cadena,
		cache:"false",
		beforeSend:function(){

			$('#login').val("conectando..")
		},

		success:function(data){

	if (data=="1"){
			alertify.success('Bienvenido '+ ID_USUARIO);

			location.replace('home.php');


		}
		else{
		alertify.error('Datos incorrectos e intenta nuevamente');
		}
	}

	});

} 

});

}); 


</script>