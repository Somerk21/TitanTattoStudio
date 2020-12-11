@extends('layouts.adminis')
@section('titulo') Consulta Empleados @endsection
@section('admins')
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Nueva Imagen</div><hr>
         <form class="form-horizontal" action="{{route('catalogos.store')}}" method="POST" enctype="multipart/form-data">
          @csrf 
           <fieldset>

            <div class="form-group">
             <label for="input-1">Nombre:</label>
             <input type="text" name="txtImagenCat" class="form-control" id="input-1" placeholder="">
            </div>

            <div class="form-group">
              <label for="input-3">Color:</label>
              <div class="col-md-12">
                <select id="input-3" name="txtColorCat" class="form-control">
                  <option value="si">SI</option>
                  <option value="no">No</option>
                 </select>
              </div>
            </div>

            <div class="form-group">
             <label for="input-3">URL:</label>
             <input type="file" name="file" class="form-control" id="input-3" placeholder="" accept="image/*">
            </div>

            <div class="form-group">
             <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Registrar</button>
            </div>
     </fieldset>
   </form>
   @if(session('BuenaImagen') )
   <p class="alert-success">{{ session("BuenaImagen")}}</p>
   @else 
     @foreach($errors->all() as $error)
     <p class="alert-danger"> {{$error}} </p>
     @endforeach
   @endif
       </div>
    </div>
</div>
<button type="submit"  class="btn btn-light px-5"><a href="{{ url('../catalogos') }}">Volver</a></button>
@endsection