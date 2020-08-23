<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatCreate</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
</head>
<body>
  <form class="form-horizontal" method="POST" action="{{ url('catalogos/store') }}">
   @csrf 
     <fieldset>
      <legend>Nueva Foto</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Nombre </label>
  <div class="col-md-4">
    <input id="passwordinput" name="txtNombreCat" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">URL imagen</label>  
  <div class="col-md-4">
  <input id="textinput" name="txtUrlCat" type="text" placeholder="" class="form-control input-md"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Color</label>
  <div class="col-md-4">
    <select id="selectbasic" name="txtColorCat" class="form-control">
      <option value="0">SI</option>
      <option value="1">No</option>
    </select>
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
   @if(session('BuenaImagen') )
   <p class="alert-success">{{ session("BuenaImagen")}}</p>
   @else 
     @foreach($errors->all() as $error)
     <p class="alert-danger"> {{$error}} </p>
     @endforeach
   @endif
</body>
</html>