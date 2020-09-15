@extends('layouts.adminis')
@section('titulo') Consulta Catalogo @endsection
@section('admins')
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista de Imagenes</h5>
			  <div class="table-responsive">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre Imagen</th>
                      <th>Color</th>
                      <th>URL</th>   
                      <th>Estado</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($catalogos as $catalogo)
                      <tr>
                         <th><strong class="text-danger">{{ $catalogo->Id_Catalogo}}</strong></th>
                         <th>{{ $catalogo->Nombre_Imagen}}</th>
                         <th>{{ $catalogo->Color_Imagen}}</th>
                         <th>{{ $catalogo->Url_Imagen	}}</th>
                         <th> <input type="button" class="btn btn-primary" value="Activo"></th>
                         <th><a href="#">Editar</a><a href="#">/ Eliminar </a> </th>
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
@endsection