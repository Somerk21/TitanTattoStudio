@extends('layouts.adminis')
@section('titulo') Consulta Empleados @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Editar Cita</div><hr>
          <form class="form-horizontal" method="POST" action="{{ url('/citas/' . $cita->Id_cita) }}">
          {{ csrf_field()}}
         {{ method_field('PUT') }}  
            <fieldset>
            <div class="form-group">
             <label for="input-1">Fecha de la cita:</label>
             <input type="datetime-local" name="Fecha_Cita" class="form-control" id="input-1" placeholder="" value="{{ $cita->Fecha_Cita }}">
            </div>
            
            <div class="form-group">
              <label for="input-2">Duracion:</label>
              <div class="col-md-12">
                <select id="input-2" name="Duracion_Cita" class="form-control" value="{{ $cita->Duracion_Cita }}">
                  <option value="30">30 Minutos</option>
                  <option value="60">1 Hora</option>
                  <option value="90">1 Hora y Media</option>
                  <option value="120">2 Horas</option>
                  <option value="150">2 Horas y media</option>
                  <option value="180">3 Horas</option>
                  <option value="210">3 Horas y media</option>
                  <option value="240">4 Horas</option>
                 </select>
              </div>
            </div>

            <div class="form-group">
             <label for="input-3">Empleado:</label>
             <input type="text" name="ID_Empleado_FK" class="form-control" id="input-3" placeholder="" value="{{ $cita->ID_Empleado_FK }}">
            </div>

            <div class="form-group">
             <label for="input-4">Cliente:</label>
             <input type="text" name="ID_Cliente_FK" class="form-control" id="input-4" placeholder="" value="{{ $cita->ID_Cliente_FK }}">
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