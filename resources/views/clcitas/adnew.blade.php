@extends('layouts.adminis')
@section('titulo') Crear cita @endsection
@section('contenedor')
		<!-- checkout-area start -->
		<div class="checkout-area ptb-130 bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="checkout-form-wrap mb-30">
							<h3 class="checkout-title">Agenda tu cita</h3>
							<div class="checkout-form">
                            <form class="form-horizontal" method="POST" action="{{ url('clcitas/store') }}">
								<div class="row">
                                @csrf  
						 <div class="checkout-form-wrap">
							<div class="checkout-form">
								<div class="row">
									<!-- <div class="col-md-6">
										<p>Fecha y hora de la cita <span>*</span></p>
										<input type="datetime-local" name="Fecha_Cita" />
									</div> -->

									<div class="col-md-6">
										<p>Fecha de la cita <span>*</span></p>
										<input type="date" name="Fecha_Cita" id="">
										
									</div>

									<div class="col-md-6">
										<p>Hora de la cita <span>*</span></p>
										<select name="HoraCita">
											<option>7:00 - 8:00</option>
											<option>9:00 - 10:00</option>
											<option>11:00 - 12:00</option>
											<option>13:00 - 14:00</option>
											<option>14:00 - 15:00</option>
										</select>
									</div>


									<!-- <input type="hidden" name="EstadoCita" value="3" > -->

                                </div>
                                
                            </div>
							<!-- <a class="order" href="#">Place Your Order</a> -->
							<button type="submit" class="order">Confirmar</button>
						</div>
					</div> 
                            </form>
						</div>
			
					</div>
				</div>
			</div>
		</div>
        <!-- checkout-area end -->
        @endsection