@extends('layouts.adminis')
@section('titulo') Consulta Citas @endsection
@section('admins')
<div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista de Citas</h5>
			         <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Fecha de la cita</th>
                      <th>Duracion</th>
                      <th>Empleado</th>
                      <th>Cliente</th>
                      <th>Estado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($citas as $cita)
                    <tr>
                        <th><strong class="text-danger">{{ $cita->Id_cita}}</strong></th>
                        <th>{{ $cita->Fecha_Cita}}</th>
                        <th>{{ $cita->Duracion_Cita}}</th>
                        <th>{{ $cita->ID_Empleado_FK}}</th>
                        <th>{{ $cita->ID_Cliente_FK}}</th>
                        <th> <input type="button" class="btn btn-primary" value="Activo"></th>
                        <th><a href="#">Editar  </a> <a href="#">/ Eliminar </a> </th>
                       </tr>
                        @endforeach
                      </tbody>
                    </table>
                     {{$citas->links()}}</br>
                     <button type="submit" href="usuarios/create" class="btn btn-light px-5">Crear uno Nuevo</button>
                </div>
          </div>
    </div>
</div>
@endsection