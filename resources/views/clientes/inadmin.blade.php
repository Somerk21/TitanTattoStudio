@extends('layouts.adminis')
@section('titulo') Consulta Clientes @endsection
@section('admins')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Clientes</h5>
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
                      <!--<th>Contraseña</th>-->
                     <!-- <th>Rol</th>-->
                      <th>Cambios</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($clientes as $cliente)
                       <tr>
                         <th>{{ $cliente->id }}</th>
                         <th>{{ $cliente->name}}</th>
                         <th>{{ $cliente->email }}</th>
                         <th>{{ $cliente->telefono }}</th>
                         <th>{{ $cliente->edad }}</th>
                         <!--<th>{{ $cliente->password}}</th>-->
                        <!-- <th>{{ $cliente->Rol}}</th> -->
                         <th> <a class="zmdi zmdi-brush" href="{{ url('clientes/'.$cliente->id.'/edit') }}"></a> 
                         <td>
                                   
                                   @if ($cliente->estado == 1)
                                   <a href="{{ url('clientes/inhabilitar/'.$cliente->id) }}" class="btn btn-danger">Inactivar</a>
                                   @elseif ($cliente->estado == 2)
                                   <a href="{{ url('clientes/habilitar/'.$cliente->id) }}"  class="btn btn-primary">Activar</a>
                                   @endif                                      
                               
                           </td>
                           </th>
                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$clientes->links()}}</br>
                    <button type="submit" class="btn btn-light px-5"><a href="clientes/create">Nuevo
                            Cliente</a></button>
                </div>
            </div>
        </div>
    </div>
    @endsection