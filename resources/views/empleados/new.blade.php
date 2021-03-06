@extends('layout_empleado.adminisE')
@section('titulo') Crear Empleados @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Nuevo Empleado</div><hr>
         <form class="form-horizontal" method="POST" action="{{ url('empleados/store') }}">
          @csrf 
          <fieldset>
          <div class="form-group row">
             <label class="col-lg-1 col-form-label form-control-label">Nombre:</label>
             <div class="col-lg-8">
              <input type="text" name="name" class="form-control" id="input-1" placeholder="">
             </div>
            </div>

             <div class="form-group row">
             <label class="col-lg-1 col-form-label form-control-label">Email:</label>
             <div class="col-lg-8">
              <input type="email" name="email" class="form-control" id="input-2" placeholder="">
            </div>
            </div>

            <div class="form-group row">
             <label class="col-lg-1 col-form-label form-control-label">Contraseña:</label>
             <div class="col-lg-8">
              <input type="password" name="password" class="form-control" id="input-3" placeholder="">
            </div>
            </div>
  
            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>
          </fieldset>
         </form>
           
       </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../empleados') }}">Volver</a></button>
@endsection