@extends('layouts.detalle')
@section('contenedor')
<div class="project-area bg-1">
 <div class="container">
     <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
              <div class="section-title text-center">
                  <h2>Ultimas Creaciones</h2>
                  <p>Nos Orgullecemos en tener Obras y Estilos completamente unicos y Originales. Algunas de nuestras Ultimas obras las encontraras a continuacion.</p>
               </div>
          </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
                <div class="project-menu">
                    <button class="active" data-filter="*">Todas</button>
                    <button data-filter=".cat1">Brazo inferior</button>
                    <button data-filter=".cat4">Brazo superior</button>
                    <button data-filter=".cat2">Pierna</button>
                    <button data-filter=".cat3">otros</button>
                    
                </div>
            </div>
            </div>

            <div class="row grid">
                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/Abstracto.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/Abstracto.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                 </div>

            
                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/anclaYarpon.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/anclaYArpon.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                    
                <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/cartoon.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/cartoon.jpg')}}" class="popup">
                             <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/craneo.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/craneo.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/culturaJaponesa.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/culturaJaponesa.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/demonio.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/demonio.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                
                <div class="col-2 cat3 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/deadpool.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/deadpool.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat3 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/escarabajo-culturaEgipcia.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/escarabajo-culturaEgipcia.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                    
                <div class="col-2 cat3 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/flores.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/flores.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

               

                <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/GatoFlores.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/GatoFlores.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/gatonaranja.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/gatonaranja.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/LeonYOtros.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/LeonYOtros.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/LeonYSerpiente.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/LeonYSerpiente.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/MascaraCrash.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/MascaraCrash.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
               
                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/mascaras.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/mascaras.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/CartoonConejos.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/CartoonConejos.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                

                <div class="col-2 cat4 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/pez.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/pez.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/elefante.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/elefante.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                

                <div class="col-2 cat4 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/medusa-mitologiaGriega.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/medusa-mitologiaGriega.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/rubi-abstracto.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/rubi-abstracto.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat4 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/samurai.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/samurai.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat1 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/GatoAbstracto.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/GatoAbstracto.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>
                   
                <div class="col-2 cat4 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/medusaBrazo.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/medusaBrazojpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-2 cat4 project col-md-3 col-sm-6 col-xs-12">
                    <div class="project-wrap">
                        <img src="{{asset('Imagenes/cabra.jpg')}}" alt="">
                        <a href="{{asset('Imagenes/cabra.jpg')}}" class="popup">
                            <i class="fa fa-link"></i>
                        </a>
                    </div>
                </div>

                </div>
            </div>
        </div>
        @endsection