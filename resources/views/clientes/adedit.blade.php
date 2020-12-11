@extends('layouts.adminis')
@section('titulo') Consulta Clientes @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Editar Cliente</div><hr>
         <form class="form-horizontal" method="POST" action="{{ url('/clientes/' . $cliente->id) }}">
         {{ csrf_field()}}
         {{ method_field('PUT') }}  
           <fieldset>
            
            <div class="form-group row">
             <label class="col-lg-1 col-form-label form-control-label">Nombre:</label>
             <div class="col-lg-8">
              <input type="text" name="name" class="form-control" id="input-1" value="{{ $cliente->name }}">
             </div>
            </div>

             <div class="form-group row">
             <label class="col-lg-1 col-form-label form-control-label">Email:</label>
             <div class="col-lg-8">
              <input type="email" name="email" class="form-control" id="input-2" value="{{ $cliente->email }}">
            </div>
            </div>

            <div class="form-group row">
             <label class="col-lg-1 col-form-label form-control-label">Telefono:</label>
             <div class="col-lg-8">
              <input type="number" name="telefono" class="form-control" id="input-1" placeholder="" value="{{ $cliente->telefono }}">
             </div>
            </div>

            <div class="form-group row">
             <label class="col-lg-1 col-form-label form-control-label">Edad:</label>
             <div class="col-lg-8">
              <input type="number" name="edad" class="form-control" id="input-1" placeholder="" value="{{ $cliente->edad }}">
             </div>
            </div>
           <!-- <div class="form-group">
             <label for="input-3">Contraseña:</label>
             <input type="password" name="password" class="form-control" id="input-3" placeholder="" value="{{ $cliente->password }}">
            </div>
            -->
            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Editar</button>
            </div>
          </fieldset>
         </form>
        </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../clientes') }}">Volver</a></button>
@endsection
