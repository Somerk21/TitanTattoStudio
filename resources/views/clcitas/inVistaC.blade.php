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
                               
                                <th>Fecha de la cita</th>
                                <th>Hora</th>
                                <th>Cliente</th>                               
                                <th>Cambios</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($clcitas as $clcita)
                            <tr>
                               
                                <th>{{ $clcita->Fecha_Cita}}</th>
                                <th>{{ $clcita->HoraCita}}</th>
                                <th>{{ $clcita->user()->first()->name}}</th>
                                <th> <a class="zmdi zmdi-brush" href="{{ url('clcitas/'.$clcita->Id_clcita.'/edit') }}"></a> 
                         <td>
                                   
                         @if ($clcita->estado == 3)
                                   <a href="{{ url('clcitas/finalizar/'.$clcita->Id_clcita) }}" class="btn btn-danger">Finalizar</a>
                                   @elseif ($clcita->estado == 4)
                                   <a href="{{ url('clcitas/pendiente/'.$clcita->Id_clcita) }}"  class="btn btn-primary">Reanudar</a>
                                   @else
                                   Cancelado
                                   @endif                                      
                               
                           </td>
                           </th>
                              
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$clcitas->links()}}</br>
                    <button type="submit" class="btn btn-light px-5"><a href="{{ url('clcitas/insertar') }}">Nueva Cita</a></button>
                </div>
            </div>
        </div>
    </div>
    @endsection