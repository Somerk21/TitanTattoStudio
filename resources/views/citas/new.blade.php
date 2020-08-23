<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UsuCreate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
</head>
<body>
  <form class="form-horizontal" method="POST" action="{{ url('usuarios/store') }}">
   @csrf 
     <fieldset>

<!-- Form Name -->
<legend>Nuevo Usuario</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre de Usuario</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtNombreUsu" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Clave</label>
  <div class="col-md-4">
    <input id="passwordinput" name="txtClaveUsu" type="password" placeholder="" class="form-control input-md">
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" id="" name="" class="btn btn-primary">Crear</button>
  </div>
</div>

     </fieldset>
   </form>
   @if(session('exito') )
   <p class="alert-success"> {{ session("exito")}}</p>
   <P class="alert-sucess">Artista creado <strong>{{session("USUARIO")}} </strong> </p>
   @else 
     @foreach($errors->all() as $error)
     <p class="alert-danger"> {{$error}} </p>
     @endforeach
   @endif
</body>
</html>