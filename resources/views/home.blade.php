@extends('layouts.detalle')
@section('contenedor')

        <div class="slider-area">
            <div class="slider-active">
                <div class="slider-items">
                    <img src="{{('assets/assets/images/slider/1.jpg')}}" alt="slider" class="slider">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-xs-12">
                                    <h2>Bienvenido a <br>Titan Tattoo Studio</h2>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-items">
                    <img src="{{('assets/assets/images/slider/2.jpg')}}" alt="slider" class="slider">
                    <div class="single-slider single-slider2">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-offset-2 col-sm-10 col-xs-12 col-md-7 col-md-offset-5 text-right">
                                    <h2>¿Quienes Somos?</h2>
                                    <p>Somos un Tattoo especialidado en todo tipo de Modificaciones Corporales Ubicado en la Localidad Suba - El Poa con mas de 7 años de Experienza.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-items">
                    <img src="{{( 'assets/assets/images/slider/3.jpg' )}}" alt="slider" class="slider">
                    <div class="single-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-10 col-xs-12">
                                    <h2>Tattoo de Confianza</h2>
                                    <p>Puedes confiar en que podemos convertir tu cuerpo en una obra maestra, contamos con Excelentes artitas de la Localidad a tu dispocicion.</p>
                                    <p><a class="active" href="citas/create">Agenda Tu Cita Aqui</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <button data-filter=".cat1">Brazo</button>
                            <button data-filter=".cat2">Pierna</button>
                            <button data-filter=".cat3">Pecho</button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-2 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{('assets/assets/images/galeria/Pierna1.jpg')}}" alt="">
                            <a href="{{('assets/assets/images/galeria/Pierna1.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat2 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{('assets/assets/images/galeria/Brazo2.jpg')}}" alt="">
                            <a href="{{('assets/assets/images/galeria/Brazo2.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat3 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{('assets/assets/images/galeria/Pecho1.jpg')}}" alt="">
                            <a href="{{('assets/assets/images/galeria/Pecho1.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-3 cat1 project col-md-3 col-sm-6 col-xs-12">
                        <div class="project-wrap">
                            <img src="{{('assets/assets/images/galeria/Brazo4.jpg')}}" alt="">
                            <a href="{{('assets/assets/images/galeria/Brazo4.jpg')}}" class="popup">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-area bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Excelentes Artistas</h2>
                            <p>En Titan Tattoo Studio nos preocupamos por darte la mejor Calidad en nuestras Obras y por eso para ti de contamos con Increibles Artitas Certifiados con mucha experiencia en Modificaciones Corporales.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{('assets/assets/images/team/1.jpg')}}" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Marshal Jcob</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{('assets/assets/images/team/2.jpg')}}" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Aundre Alexa</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{('assets/assets/images/team/3.jpg')}}" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Xavir Flintof</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{('assets/assets/images/team/4.jpg')}}" alt="">
                                <div class="team-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Micky Frade</h3>
                                <p>Tattoo Design Expart</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="book-now-area black-opacity bg-img-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="booknow-wrap">
                            <div class="section-title">
                                <h2>¿Deseas uno de nuestros Trabajos?</h2>
                                <br>
                                <h3> ¡Ingresa Ya!</h3>
                                <p> Registrate con nosotros y dirijete directamente a Reservar una Cita para para que puedas tener una Fecha y una Hora para hacer tu Obra Maestra!</p>
                            </div>
                            <form action="#">
                                    <div class="col-xs-20">
                                        <button>Agenda Tu cita</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        @endsection      