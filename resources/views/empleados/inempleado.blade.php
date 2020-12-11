@extends('layouts.adminis')
@section('titulo') Consulta Empleados @endsection
@section('admins')
<div class="row">
    <div class="col-lg-12">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title">Lista de empleados</h5> 

           @if(session('exito') )
               <p class="alert-success"> {{ session("exito")}}</p>
                @else 
             @foreach($errors->all() as $error)
               <p class="alert-danger"> {{$error}} </p>
             @endforeach
           @endif

			       <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Correo Electronico</th>
                      <th>Telefono</th>
                      <th>Edad</th>
                     <!-- <th>Contraseña</th>
                      <th>Rol</th>-->
                      <th>Cambios</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($empleados as $empleado)
                       <tr>
                         <th>{{ $empleado->id }}</th>
                         <th>{{ $empleado->name}}</th>
                         <th>{{ $empleado->email }}</th>
                         <th>{{ $empleado->telefono }}</th>
                         <th>{{ $empleado->edad }}</th>
                        <!-- <th>{{ $empleado->password}}</th>
                         <th>{{ $empleado->Rol}}</th> -->
                         <th> <a class="zmdi zmdi-brush" href="{{ url('empleados/'.$empleado->id.'/edit') }}"></a> 
                         <td>
                                   
                                   @if ($empleado->estado == 1)
                                   <a href="{{ url('empleados/inhabilitar/'.$empleado->id) }}" class="btn btn-danger">Inactivar</a>
                                   @elseif ($empleado->estado == 2)
                                   <a href="{{ url('empleados/habilitar/'.$empleado->id) }}"  class="btn btn-primary">Activar</a>
                                   @endif                                      
                               
                           </td>
                           </th>
                       </tr>
                         @endforeach
                       </tbody>
                     </table>
                     {{$empleados->links()}}</br>
                     <button type="submit" class="btn btn-light px-5"><a href="empleados/create">Nuevo
                            Empleado</a></button>
               </div>
           </div>
     </div>
</div>
@endsection