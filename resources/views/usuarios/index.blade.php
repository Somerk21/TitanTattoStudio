@extends('layouts.adminis')
@section('titulo') Consulta Usuarios @endsection
@section('admins')
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista de usuarios</h5>
              <div class="c">
              <button type="submit"  class="btn btn-light px-5"><a href="usuarios/create">Nuevo Usuario</a></button>
              </div>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                       <th>Codigo</th>
                       <th>Usuario</th>
                       <th>Clave</th> 
                       <th>Opciones</th> 
                    </tr>
                  </thead>
                    @foreach($usuarios as $usuario)
                       <tr>
                          <th>{{ $usuario->Id_Usuario}}</th>
                          <th>{{ $usuario->Nombre_Usuario}}</th>
                          <th>{{ $usuario->Clave_Usuario}}</th>
                          <th><a class="zmdi zmdi-brush" href="{{ url('usuarios/'.$usuario->Id_Usuario.'/edit') }}"></a>
                          <td>
                                   
                                   @if ($usuario->Id_Estado_FK == 1)
                                   <a href="{{ url('usuarios/inhabilitar/'.$usuario->Id_Usuario) }}" class="btn btn-danger">Inactivar</a>
                                   @elseif ($usuario->Id_Estado_FK == 2)
                                   <a href="{{ url('usuarios/habilitar/'.$usuario->Id_Usuario) }}"  class="btn btn-primary">Activar</a>
                                   @endif                                      
                               
                           </td>
                       </tr>
                       @endforeach
                     </tbody>
                </table></br>
                {{$usuarios->links()}}</br>
              
                <button type="submit"  class="btn btn-light px-5"><a href="usuarios/create">Nuevo Usuario</a></button>
              
              </div>
          </div>
      </div>
</div>
@endsection