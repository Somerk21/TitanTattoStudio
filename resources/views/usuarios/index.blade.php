@extends('layouts.adminis')
@section('titulo') Consulta Usuarios @endsection
@section('admins')
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista de usuarios</h5>
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
                          <th><strong class="text-danger">{{ $usuario->Id_Usuario}}</strong></th>
                          <th>{{ $usuario->Nombre_Usuario}}</th>
                          <th>{{ $usuario->Clave_Usuario}}</th>
                          <th><a href="#">Editar  </a> <a href="#">/ Eliminar </a> </th>
                       </tr>
                       @endforeach
                     </tbody>
                </table></br>
                {{$usuarios->links()}}</br>
                <button type="submit" href="usuarios/create" class="btn btn-light px-5">Crear uno Nuevo</button>
            </div>
          </div>
      </div>
</div>
@endsection