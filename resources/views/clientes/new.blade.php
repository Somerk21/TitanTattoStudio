@extends('layouts.adminis')
@section('titulo') Consulta Clientes @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Nuevo Empleado</div><hr>
         <form class="form-horizontal" method="POST" action="{{ url('clientes/store') }}">
          @csrf 
           <fieldset>
            <div class="form-group">
             <label for="input-1">Nombre:</label>
             <input type="text" name="txtNombreCli" class="form-control" id="input-1" placeholder="">
            </div>
            <div class="form-group">
             <label for="input-2">Apellido:</label>
             <input type="text" name="txtApellidoCli" class="form-control" id="input-2" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-3">Direccion:</label>
             <input type="text" name="txtDireccionCli" class="form-control" id="input-3" placeholder="">
            </div>
            <div class="form-group">
             <label for="input-4">correo:</label>
             <input type="email" name="txtCorreoCli" class="form-control" id="input-4" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-5">Telefono:</label>
             <input type="number" name="txtTelefonoCli" class="form-control" id="input-5" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-6">Documento:</label>
             <input type="number" name="txtDocumentoCli" class="form-control" id="input-6" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-7">Fecha Nacimiento:</label>
             <input type="date" name="txtFechaNac" class="form-control" id="input-7" placeholder="">
            </div>
            <div class="form-group">
             <label for="input-8">Usuario:</label>
             <input type="text" name="txtUsuarioCli" class="form-control" id="input-8" placeholder="">
            </div>

            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>
          </fieldset>
         </form>
        @if(session('BuenCli'))
         <p class="alert-success">{{ session("BuenCli")}}</p>
         <p class="alert-success">Cliente Creado <strong>{{session("Nombre_Cliente")}}</strong></p>
           @else 
         @foreach($errors->all() as $error)
          <p class="alert-danger"> {{$error}} </p>
         @endforeach
        @endif
        </div>
    </div>
</div>
@endsection
