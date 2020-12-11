@extends('layout_empleado.adminisE')
@section('titulo') Consulta Usuarios @endsection
@section('admins')

<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-10">
                <div class="card profile-card-2">
                @foreach($perfiles as $perfil)
                    <div class="card-body pt-5">

                        <h5 class="card-title">{{ $perfil->name}}</h5>
                        <p class="card-text">Artista profesional</p>

                    </div>

                    <div class="card-body border-top border-light">
                        <div class="media align-items-center">
                            <div class="col-md-6">
                                <h6>Frase emblematica</h6>
                                <p>
                                “Mi cuerpo es mi diario y mis tatuajes son mi historia” – Johnny Deep.
                                </p>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span
                                        class="hidden-xs">Profile</span></a>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                        class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                            </li>
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane active" id="profile">

                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>datos personales</h6>
                                        
                                        <th>{{ $perfil->id }}</th>
                         <th></th>
                         <th>{{ $perfil->email }}</th>
                                        <h6>Hobbies</h6>
                                        <p>
                                            mangaka, jugador profecional de beisbol. amante de los gatos.
                                        </p>
                                        <h6>fecha de contrato</h6>
                                        <p>
                                            20/01/2020
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>citas de hoy</h6>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">7:00 A.M - 8:00
                                            A.M <strong>Nombre de cliente</strong></a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">8:00 A.M - 9:00
                                            A.M <strong>Nombre de cliente</strong></a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">9:00 A.M -
                                            10:00 A.M <strong>Nombre de cliente</strong></a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">12:00 P.M -
                                            1:00 P.M <strong>Nombre de cliente</strong> </a>
                                        <hr>
                                        <h6>citas de Mañana</h6>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">7:00 A.M - 8:00
                                            A.M <strong>Nombre de cliente</strong></a>
                                        <a href="javascript:void();" class="badge badge-dark badge-pill">8:00 A.M - 9:00
                                            A.M <strong>Nombre de cliente</strong></a>

                                    </div>
                                    <hr>



                                </div>

                            </div>

                            <div class="tab-pane" id="edit">
                                <form class="form-horizontal" method="POST"
                                    action="{{ url('/perfiles/' . $perfil->id) }}">
                                    {{ csrf_field()}}
                                    {{ method_field('PUT') }}
                                    <fieldset>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" name="name" type="text" value="{{ $perfil->name }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" name ="email" type="email" value="{{ $perfil->email  }}">
                                        </div>
                                    </div>

                                    



                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nueva contraseña</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" name="password" type="password" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nueva clave</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" name="lastpassword" type="password" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <!--input type="reset" class="btn btn-secondary" value="Cancel"-->
                                            <button class="btn btn-primary">Save Changes</button>
                                            
                                        </div>
                                    </div>
                                    </fieldset>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @endsection