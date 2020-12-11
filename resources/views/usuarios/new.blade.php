@extends('layouts.adminis')
@section('titulo') Crear Usuario @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Nuevo Detalle De Trabajo</div><hr>
         <form class="form-horizontal" method="POST" action="{{ url('usuarios/store') }}">
          @csrf
           <fieldset>
            <div class="form-group">
             <label for="input-1">Usuario:</label>
             <input type="text" name="txtNombreUsu" class="form-control" id="input-1" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-2">Clave:</label>
             <input type="password" name="txtClaveUsu" class="form-control" id="input-2" placeholder="">
            </div>        
  
            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>
           </fieldset>
           <div id="respuesta"></div>
         </form>
          @if(session('exito'))
          <p class="alert-success"> {{ session("exito")}}</p>
          <P class="alert-success">usuario creado <strong>{{session("Nombre_Usuario")}}</strong></p>
          @else 
           @foreach($errors->all() as $error)
            <p class="alert-danger"> {{$error}} </p>
           @endforeach
          @endif
        </div>
    </div>
</div>
<button type="submit" id="enviar" class="btn btn-light px-5"><a href="{{ url('../usuarios') }}">Volver</a></button>
@endsection
<script type="text/javascript">

$(document).ready(function(){


$('#login').click(function(){

var ID_USUARIO = $('#txtNombreUsu').val();
var CLAVE = $('#txtClaveUsu').val();

cadena= "txtNombreUsu=" + ID_USUARIO + "&txtClaveUsu=" + CLAVE;

if ($.trim(ID_USUARIO).length < 1){
	alertify.alert('UPSS','debes digitar Usuario');

}

if ($.trim(CLAVE).length < 1 ){
	alertify.alert('UPSS','debes digitar contraseña');

}
if ($.trim(ID_USUARIO).length > 0 && $.trim(CLAVE).length > 0 ){
	
	$.ajax({
		url:"ajax/usuario.php",
		method:"post",
		data:cadena,
		cache:"false",
		beforeSend:function(){

			$('#enviar').val("conectando..")
		},

		success:function(data){

	if (data=="1"){
			alertify.success('Bienvenido '+ ID_USUARIO);

			location.replace('/home/');


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