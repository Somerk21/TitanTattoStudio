@extends('layouts.adminis')
@section('titulo') Consulta detalle @endsection
@section('admins')
<div class="checkout-area ptb-130 bg-1">
    <div class="container">
			  <div class="row">
		    		<div class="col-md-12">
				    		<div class="checkout-form-wrap mb-30">
                  <div class="checkout-form-wrap mb-30">
					      		<h3 class="checkout-title">listas de trabajo</h3>
                     <table class="table table-borderless">
                      <thead>
                        <tr>
                           <th>Codigo</th>
                           <th>Alergias</th>
                           <th>Precio</th>
                           <th>Detalle del trabajo</th>
                           <th>Abono</th>  
                           <th>Cliente</th>
                           <th>Empleado</th>
                           <th>Catalogo</th>
                           <th>Cita</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($detalles $detalle)
                          <tr>
                            <th><strong class="text-danger">{{ $detalle->Id_Detalle}}</strong></th>
                            <th>{{ $detalle->Alergias_Detalle}}</th>
                            <th>{{ $detalle->Precio_Detalle}}</th>
                            <th>{{ $detalle->Detalle_Trabajo}}</th>
                            <th>{{ $detalle->Abonos_Detalle	}}</th>
                            <th>{{ $detalle->Id_Cliente_FK}}</th>
                            <th>{{ $detalle->Id_Empleado_FK}}</th>
                            <th>{{ $detalle->Id_Catalogo_FK}}</th>
                            <th>{{ $detalle->Id_Cita_FK}}</th>
                            <th><a href="#">Editar</a>/<a href="#">Eliminar</a></th>
                          </tr>
                         @endforeach
                      </tbody>
                     </table> 
                       {{$catalogos->links()}}</br>
                       <button type="submit" href="usuarios/create" class="btn btn-light px-5">Crear uno Nuevo</button>
                   </div>
                 </div>
             </div>
			 </div>
		</div>
</div>
@endsection