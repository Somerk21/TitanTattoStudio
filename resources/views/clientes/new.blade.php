<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
</head>
<body>
  <form class="form-horizontal" method="POST" action="{{ url('clientes/store') }}">
   @csrf 
     <fieldset>

<legend>Nuevo cliente</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtNombreCli" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Apellido:</label>
  <div class="col-md-4">
  <input id="passwordinput" name="txtApellidoCli" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Direccion:</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtDireccionCli" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Telefono:</label>
  <div class="col-md-4">
  <input id="passwordinput" name="txtTelefonoCli" type="number" placeholder="" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Documento:</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtDocumentoCli" type="number" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Fecha Nacimiento</label>
  <div class="col-md-4">
  <input id="passwordinput" name="txtFechaNac" type="date" placeholder="" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Usuario</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtUsuarioCli" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" id="" name="" class="btn btn-primary">Crear</button>
  </div>
</div>

     </fieldset>
   </form>
   @if(session('BuenCli'))
   <p class="alert-success">{{ session("BuenCli")}}</p>
   <P class="alert-success">Cliente Creado <strong>{{session("NOMBRE_CLIENTE")}}</strong></p>
   @else 
     @foreach($errors->all() as $error)
     <p class="alert-danger"> {{$error}} </p>
     @endforeach
   @endif
</body>
</html>
