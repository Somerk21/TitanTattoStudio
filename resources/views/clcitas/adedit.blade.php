@extends('layouts.adminis')
@section('titulo') Consulta Empleados @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Editar Cita</div><hr>
          <form class="form-horizontal" method="POST" action="{{ url('/clcitas/' . $clcitas->Id_clcita ) }}">
          {{ csrf_field()}}
         {{ method_field('PUT') }}  
            <fieldset>
            <div class="form-group">
             <label for="input-1">Fecha de la cita:</label>
             <input type="date" name="Fecha_Cita" id="input-1"  class="form-control" value="{{ $clcitas->Fecha_Cita  }}">

            </div>
            
            <div class="form-group">
              <label for="input-2">Hora de la cita:</label>
              <div class="col-md-12">
             
                <select id="input-2" name="HoraCita" class="form-control" value="{{ $clcitas->HoraCita  }}">
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
             <input type="text" name="ID_Cliente_FK" class="form-control" id="input-4" placeholder="" value="{{ $clcitas->ID_Cliente_FK}}">
            </div>

            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Editar</button>
            </div>
            </fieldset>
          </form>
        </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../citas') }}">Volver</a></button>
@endsection