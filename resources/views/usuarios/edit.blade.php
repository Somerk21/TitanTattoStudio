@extends('layouts.adminis')
@section('titulo') Crear Usuario @endsection
@section('admins')

<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Editar Usuario</div><hr>
        <form action="{{ url('/usuarios/' . $usuario->Id_Usuario) }}" method="post" enctype="multipart/form-data">
         {{ csrf_field()}}
         {{ method_field('PUT') }} 
           <fieldset>
            <div class="form-group">
             <label for="input-1">Usuario:</label>
             <input type="text" name="Nombre_Usuario" class="form-control" value="{{ $usuario->Nombre_Usuario }}" id="input-1" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-2">Clave:</label>
             <input type="password" name="Clave_Usuario" class="form-control" value="{{ $usuario->Clave_Usuario }}" id="input-2" placeholder="">
            </div>        
  
            <div class="form-group">
             <button type="submit" value="Editar" class="btn btn-light px-5"><i class="icon-lock"></i>actualizar</button>
            </div>
           </fieldset>
         </form>
        </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../usuarios') }}">Volver</a></button>
@endsection