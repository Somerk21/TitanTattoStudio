<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titan Tattoo Studio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/assets/css/slicknav.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/assets/css/responsive.css')}}">
        <script src="{{ asset('assets/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('assets/assets/css/styles.css')}}">
    </head>
<body>
<nav class="header-area" id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header-bottom">
                             <div class="row">
                                <div class="col-md-3 col-sm-9 col-xs-6">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="{{ asset('assets/assets/images/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 hidden-sm hidden-xs">
                                    <div class="mainmenu text-right">
                                        <ul id="navigation">
                                            <li class="active"><a href="/">Inicio</a></li>
                                            <li><a href="clcitas">Citas</a>
                                                <!-- <ul>
                                                    <li><a href="{{ url('/empleados/') }}">Empleado</a></li>
                                                    <li><a href="{{ url('detalle_citas/') }}">Detalle</a></li>
                                                    <li><a href="{{ url('clientes/') }}">Cliente</a></li>
                                                    <li><a href="{{ url('citas/') }}">Agendar cita</a></li>
                                                    <li><a href="{{ url('catalogos/') }}">Galeria</a></li>
                                                </ul> -->
                                            </li>



                                            <li><a href="#">Cuidados</a>

                                            </li>

                                            <li><a href="catalogos">Catalogo</a>

                                            </li>
                                            
                                            <li><a href="{{ url('logout') }}">Cerrar sesion</a></li>
                                        </ul>
                                    </div>
                                </div>
                           
                                <div class=" col-xs-2 col-sm-1 hidden-md hidden-lg">
                                    <div class="responsive-menu-wrap floatright"></div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
</nav>
@yield('contenedor')
<footer class="footer-area bg-2">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                 <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                      <div class="footer-widget footer-content">
                         <h2>Sobre nosotros</h2>
                          <p>Nuestros datos por si tienen alguna pregunta</p>
                          <ul>
                             <li><i class="fa fa-phone"></i> +57 316 7585348 </li>
                             <li><i class="fa fa-envelope"></i> karito.arteaga@hotmail.com</li>
                             <li><i class="fa fa-map-marker"></i>  # 103 F, Cl. 140 #2370, Bogotá</li>
                          </ul>
                       </div>
                   </div>
                   <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget footer-time">
                                <h2>Tiempos de trabajo</h2>
                                <ul>
                                    <li>Lunes <span class="pull-right">10:00 AM - 07:00 PM</span></li>
                                    <li>Martes <span class="pull-right">10:00 AM - 07:00 PM</span></li>
                                    <li>Miercoles <span class="pull-right">10:00 AM - 07:00 PM</span></li>
                                    <li>Jueves <span class="pull-right">10:00 AM - 07:00 PM</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-2 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget footer-time">
                                <br><h2></h2>
                                <ul>
                                    <li>Viernes <span class="pull-right">10:00 AM - 07:00 PM</span></li>
                                    <li>Sabado <span class="pull-right">10:00 AM - 07:00 PM</span></li>
                                    <li>Domingo <span class="pull-right">10:00 AM - 07:00 PM</span></li>
                                    <li>Festivo <span class="pull-right color">Cerrado</span></li>
                                </ul>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/counterup.main.js')}}"></script>
    <script src="{{ asset('assets/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/assets/js/plugins.js')}}"></script>		
    <script src="{{ asset('assets/assets/js/scripts.js')}}"></script>
</body>
</html>