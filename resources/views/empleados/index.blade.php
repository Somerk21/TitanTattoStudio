@extends('layouts.adminis')
@section('titulo') Consulta Empleados @endsection
@section('admins')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title">Lista de empleados</h5>
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
                      <th>Usuario</th>
                      <th>Estado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($empleados as $empleado)
                       <tr>
                         <th><strong class="text-danger">{{ $empleado->Id_Empleado}}</strong></th>
                         <th><strong class="text-danger">{{ $empleado->Nombre_Empleado}}</strong>
                         <a></a>{{ $empleado->Apellido_Empleado}}</th>
                         <th>{{ $empleado->Direccion_Empleado}}</th>
                         <th>{{ $empleado->Correo_Empleado}}</th>
                         <th>{{ $empleado->Telefono_Empleado}}</th>
                         <th>{{ $empleado->Documento_Empleado}}</th>  
                         <th>{{ $empleado->ID_Usuario_FK}}</th>
                         <th> <input type="button" class="btn btn-primary" value="Activo"></th>
                         <th><a href="usuarios/edit">editar</a>/ <a href="#">Eliminar </a></th>
                       </tr>
                         @endforeach
                       </tbody>
                     </table>
                     {{$empleados->links()}}</br>
                     <button type="submit" href="usuarios/create" class="btn btn-light px-5">Crear uno Nuevo</button>
               </div>
           </div>
     </div>
</div>
@endsection