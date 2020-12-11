@extends('layout_empleado.adminisE')
@section('titulo') Detalle de citas @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Editar Detalle De Trabajo</div><hr>
        <form class="form-horizontal" method="POST" action="{{ url('/detalle_citas/' . $detalle->Id_Detalle) }}">
        {{ csrf_field()}}
         {{ method_field('PUT') }}  
          <fieldset>
            <div class="form-group">
             <label for="input-1">Alergias:</label>
             <input type="text" name="Alergias_Detalle" class="form-control" id="input-1" placeholder="" value="{{ $detalle->Alergias_Detalle }}">
            </div>

            <div class="form-group">
             <label for="input-2">Precio:</label>
             <input type="number" name="Precio_Detalle" class="form-control" id="input-2" placeholder="" value="{{ $detalle->Precio_Detalle }}">
            </div>     

            
            <div class="form-group">
             <label for="input-8">Detalle del Trabajo:</label>
             <textarea class="form-control" id="textarea" name="Detalle_Trabajo" value="{{ $detalle->Detalle_Trabajo }}"></textarea>
            </div>   


            <div class="form-group">
             <label for="input-3">Abono:</label>
             <input type="text" name="Abonos_Detalle" class="form-control" id="input-3" placeholder="" value="{{ $detalle->Abonos_Detalle }}">
            </div>

            <div class="form-group">
             <label for="input-6">Empleado:</label>
             <input type="text" name="Id_user_FK" class="form-control" id="input-6" placeholder="" value="{{ $detalle->Id_user_FK }}">
            </div>
            
            <div class="form-group">
             <label for="input-7">Cita:</label>
             <input type="number" name="Id_clcita_FK" class="form-control" id="input-7" placeholder="" value="{{ $detalle->Id_clcita_FK }}">
            </div>

  
            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>           
          </fieldset>
         </form>
       </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../detalle_citas') }}">Volver</a></button>
@endsection