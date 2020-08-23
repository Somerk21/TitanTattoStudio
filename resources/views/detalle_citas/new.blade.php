<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DetalleCreate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
</head>
<body>
  <form class="form-horizontal" method="POST" action="{{ url('detalle_citas/store') }}">
   @csrf 
     <fieldset>
<legend>Nuevo detalle de cita</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Alergias</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtAlergias" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Precio</label>
  <div class="col-md-4">
    <input id="passwordinput" name="txtPrecio" type="number" placeholder="" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtDetalle">Detalle De Trabajo</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="txtDetalle" name="txtDetalle"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">id cliente</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtClienteFk" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">id empleado</label>
  <div class="col-md-4">
    <input id="passwordinput" name="txtEmpleadoFk" type="text" placeholder="" class="form-control input-md">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">id catalogo</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtCatalogoFk" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Abonos Detalle</label>
  <div class="col-md-4">
    <input id="passwordinput" name="txtAbonos" type="text" placeholder="" class="form-control input-md">
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