@extends('layouts.adminis')
@section('titulo') Consulta Clientes @endsection
@section('admins')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title">Lista de Clientes</h5>
			       <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                       <th>Codigo</th>
                       <th>Nombre y Apellido</th>
                       <th>Direccion</th>
                       <th>Correo Electronico</th>
                       <th>Telefono</th>
                       <th>Documento</th>
                       <th>Fecha nacimiento</th>
                       <th>Usuario</th>
                       <th>Estado</th>
                       <th>Opciones</th>
                     </tr>
                   </thead>
                  <tbody>
                       @foreach($clientes as $cliente)
                       <tr>
                         <th><strong class="text-danger">{{ $cliente->Id_Cliente }}</strong></th>
                         <th><strong class="text-danger">{{ $cliente->Nombre_Cliente}}</strong>
                             {{ $cliente->Apellido_Cliente }}</th>
                         <th>{{ $cliente->Direccion_Cliente }}</th>
                         <th>{{ $cliente->Correo_Cliente }}</th>
                         <th>{{ $cliente->Telefono_Cliente }}</th>
                         <th>{{ $cliente->Documento_Cliente }}</th>
                         <th>{{ $cliente->Fecha_Nacimiento }}</th>
                         <th>{{ $cliente->Id_Usuario_FK }}</th>
                         <th> <input type="button" class="btn btn-primary" value="Activo"></th>
                         <th><a href="#">Editar </a><a href="#">/ Eliminar </a> </th>
                       </tr>
                          @endforeach
                         </tbody>
                       </table>
                        {{$clientes->links()}}</br>
                        <button type="submit" href="clientes/create" class="btn btn-light px-5">Crear uno Nuevo</button>
                  </div>
           </div>
     </div>
</div>
@endsection