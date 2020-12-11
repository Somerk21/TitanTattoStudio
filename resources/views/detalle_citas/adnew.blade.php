@extends('layouts.adminis')
@section('titulo') Detalle de citas @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Nuevo Detalle De Trabajo</div><hr>
        <form class="form-horizontal" method="POST" action="{{ url('detalle_citas/store') }}">
          @csrf 
          <fieldset>
            <div class="form-group">
             <label for="input-1">Alergias:</label>
             <input type="text" name="txtAlergias" class="form-control" id="input-1" placeholder="">
            </div>

            <div class="form-group">
             <label for="input-2">Precio:</label>
             <input type="number" name="txtPrecio" class="form-control" id="input-2" placeholder="">
            </div>        

            <div class="form-group">
             <label for="input-7">Abono:</label>
             <input type="number" name="txtAbonos" class="form-control" id="input-7" placeholder="">
            </div>


            <div class="form-group">
            <label for="input-7">Empleado:</label>
                    		<select name="sluser" class="form-control">
											@foreach($user as $users)
											<option class="form-control" value="{{ $users->id  }}">{{ $users->name }}</option>
											@endforeach
										</select>
									</div>

            <div class="form-group">
										<p>Cita: </p>
                    <input type="number" name="txtCitas" class="form-control" id="input-7" placeholder="">
									</div>

            <div class="form-group">
             <label for="input-8">Detalle del Trabajo:</label>
             <textarea class="form-control" id="textarea" name="txtDetalle"></textarea>
            </div>
  
            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>           
          </fieldset>
         </form>
         
         @if(session('exito') )
          <p class="alert-success"> {{ session("exito")}}</p>
         @else 
          @foreach($errors->all() as $error)
          <p class="alert-danger"> {{$error}} </p>
          @endforeach
         @endif
       </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../detalle_citas') }}">Volver</a></button>
@endsection