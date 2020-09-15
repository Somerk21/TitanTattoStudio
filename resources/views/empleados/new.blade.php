@extends('layouts.adminis')
@section('titulo') Consulta Empleados @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Nuevo Empleado</div><hr>
         <form class="form-horizontal" method="POST" action="{{ url('empleados/store') }}">
          @csrf 
          <fieldset>
            <div class="form-group">
             <label for="input-1">Nombre:</label>
             <input type="text" name="txtNombreEmp" class="form-control" id="input-1" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-2">Apellido:</label>
             <input type="text" name="txtApellidoEmp" class="form-control" id="input-2" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-3">Direccion:</label>
             <input type="text" name="txtDireccionEmp" class="form-control" id="input-3" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-4">Correo:</label>
             <input type="email" name="txtCorreoEmp" class="form-control" id="input-4" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-5">Telefono:</label>
             <input type="tel" name="txtTelefonoEmp" class="form-control" id="input-5" placeholder="">
            </div>
   
            <div class="form-group">
             <label for="input-6">Documento:</label>
             <input type="number" name="txtDocumentoEmp" class="form-control" id="input-6" placeholder="">
            </div>
   
            <div class="form-group">
             <label for="input-7">Usuario:</label>
             <input type="text" name="txtUsuarioEmp" class="form-control" id="input-7" placeholder="">
            </div>
  
            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>
          </fieldset>
         </form>
           @if(session('exito') )
               <p class="alert-success"> {{ session("exito")}}</p>
               <P class="alert-sucess">Empleado Creado <strong>{{session("Nombre_Empleado")}} </strong> </p>
                @else 
             @foreach($errors->all() as $error)
               <p class="alert-danger"> {{$error}} </p>
             @endforeach
           @endif
       </div>
    </div>
</div>
@endsection