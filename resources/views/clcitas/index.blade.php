@extends('layout_cliente.detalleCli')
@section('titulo') Crear cita @endsection
@section('contenedor')
<!-- checkout-area start -->
<div class="checkout-area ptb-130 bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-form-wrap mb-30">
                    <h3 class="checkout-title">Consultas</h3>
                    <div class="checkout-form">
                        <table class="table table-dark">
                            <thead>
                                <tr>

                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Cambios</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($clcitas as $clcita)

                                    <th>{{ $clcita->Fecha_Cita}}</th>
                                    <th>{{ $clcita->HoraCita}}</th>
                                    <th>
                                        @if ($clcita->estado != 5)
                                        <a href="{{ url('clcitas/cancelar/'.$clcita->Id_clcita) }}"
                                            class="btn btn-danger">Cancelar</a>
                                        @else
                                        Cancelado
                                        <!-- {{ $clcita->ID_Estado_FK }} -->
                                        @endif
                                    </th>

                                </tr>
                                @endforeach



                                @error('message')
                                <p>{{ $message }}</p>
                                @enderror


                            </tbody>
                        </table>

                        {{$clcitas->links()}}</br>
                        <button type="submit" class="order"><a href="clcitas/create"> Agendar </a></button>




                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- checkout-area end -->
    @endsection