@extends('layout_empleado.adminisE')
@section('titulo') Crear cita @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Nueva cita</div><hr>
          <form class="form-horizontal" method="POST" action="{{ url('clcitas/employStore') }}">
           @csrf 
            <fieldset>
            <div class="form-group">
             <label for="input-1">Fecha de la cita:</label>
             <input type="date" name="Fecha_Cita" class="form-control" id="input-1" placeholder="">
            </div>
            
            <div class="form-group">
              <label for="input-2">Hora de la cita:</label>
              <div class="col-md-12">
                <select class="form-control" name="HoraCita">
											<option>7:00 - 8:00</option>
											<option>9:00 - 10:00</option>
											<option>11:00 - 12:00</option>
											<option>13:00 - 14:00</option>
											<option>14:00 - 15:00</option>
										</select>
              </div>
            </div>


            <div class="form-group">
             <label for="input-4">Cliente:</label>
             <!--input type="text" name="ID_Cliente_FK" class="form-control" id="input-4" placeholder=""-->
             <select name="ID_User_FK" class="form-control">
											@foreach($user as $users)
											<option class="form-control" value="{{ $users->id  }}">{{ $users->name }}</option>
											@endforeach
										</select>
            </div>

            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>
            </fieldset>
          </form>
            @if(session('BuenaCita'))
             <p class="alert-success">{{ session("BuenaCita")}}</p>
            @else 
             @foreach($errors->all() as $error)
              <p class="alert-danger"> {{$error}} </p>
             @endforeach
           @endif
        </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../clcitas/vistaConsultar') }}">Volver</a></button>
@endsection