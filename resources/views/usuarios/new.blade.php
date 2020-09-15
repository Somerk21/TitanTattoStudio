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
@endsection