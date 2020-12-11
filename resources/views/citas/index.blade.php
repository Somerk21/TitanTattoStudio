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
                                <th>Cambios</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($citas as $cita)
                            <tr>
                                <th>{{ $cita->Id_cita}}</th>
                                <th>{{ $cita->Fecha_Cita}}</th>
                                <th>{{ $cita->Duracion_Cita}}</th>
                                <th>{{ $cita->ID_Empleado_FK}}</th>
                                <th>{{ $cita->ID_Cliente_FK}}</th>
                                <th>{{ $cita->Id_Estado_FK}}</th>
                                <th> <a class="zmdi zmdi-brush" href="{{ url('citas/'.$cita->Id_cita.'/edit') }}"></a>
                                    @if ($cita->Id_Estado_FK == 3)
                                    <a href="{{ url('citas/finalizar/'.$cita->Id_cita) }}"
                                        class="btn btn-danger">Finalizar</a>
                                    @elseif ($cita->Id_Estado_FK == 4)
                                    <a href="{{ url('citas/pendiente/'.$cita->Id_cita) }}"
                                        class="btn btn-primary">Pendiente</a>
                                    @endif
                                    <!-- <a href="{{ url('citas/cancelar/'.$cita->Id_cita) }}"
                                        class="btn btn-primary">Cancelar</a> -->
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$citas->links()}}</br>
                    <button type="submit" class="btn btn-light px-5"><a href="citas/create">Nueva Cita</a></button>
                </div>
            </div>
        </div>
    </div>
    @endsection