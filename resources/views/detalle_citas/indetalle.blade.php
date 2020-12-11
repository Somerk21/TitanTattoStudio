@extends('layouts.adminis')
@section('titulo') Detalle de cita @endsection
@section('admins')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title">Lista de detalles</h5>
			       <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                           <th>Codigo</th>
                           <th>Alergias</th>
                           <th>Precio</th>
                           <th>Detalle del trabajo</th>
                           <th>Abono</th>  
                           <th>Empleado</th>
                           <th>Cita</th>
                          <th>Cambios</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($detalle_citas as $detalle)
                          <tr>
                            <th>{{ $detalle->Id_Detalle}}</th>
                            <th>{{ $detalle->Alergias_Detalle}}</th>
                            <th>{{ $detalle->Precio_Detalle}}</th>
                            <th>{{ $detalle->Detalle_Trabajo}}</th>
                            <th>{{ $detalle->Abonos_Detalle	}}</th>
                            <th>{{ $detalle->user()->first()->name }}</th> 
                            <th>{{ $detalle->Id_clcita_FK }}</th>

                            <th><a class="zmdi zmdi-brush" href="{{ url('detalle_citas/'.$detalle->Id_Detalle.'/edit') }}"></a>
                            <td>
                                   
                                   @if ($detalle->Id_Estado_FK == 3)
                                   <a href="{{ url('detalle_citas/inhabilitar/'.$detalle->Id_Detalle) }}" class="btn btn-danger">Finalizar</a>
                                   @elseif ($detalle->Id_Estado_FK == 4)
                                   <a href="{{ url('detalle_citas/habilitar/'.$detalle->Id_Detalle) }}"  class="btn btn-primary">Reanudar</a>
                                   @endif                                      
                               
                           </td>
                            <!-- <button class="zmdi zmdi-brush" onclick="window.location.href='{{ url('../usuarios') }}';"></button>
                             <button class="zmdi zmdi-block" onclick="window.location.href='{{ url('../usuarios') }}';"></button> -->
                             </th>
                          </tr>
                         @endforeach
                      </tbody>
                     </table> 
                       {{$detalle_citas->links()}}</br>
                       <button type="submit"  class="btn btn-light px-5"><a href="{{ url('detalle_citas/create') }}">Nuevo Detalle</a></button>
                   </div>       
           </div>   
     </div>
</div>
@endsection