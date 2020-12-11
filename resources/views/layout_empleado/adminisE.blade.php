<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>@yield('titulo')</title>
  <link href="{{ asset('admin/css/pace.min.css')}}" rel="stylesheet"/>
   <script src="{{ asset('admin/assets/js/pace.min.js')}}"></script>
   <link rel="icon" href="{{ asset('admin/assets/images/maquina-de-tatuaje.ico')}}" type="image/x-icon">
   <link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
   <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
   <link href="{{ asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
   <link href="{{ asset('admin/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('admin/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
   <link href="{{ asset('admin/assets/css/app-style.css')}}" rel="stylesheet"/>
</head>
<body class="bg-theme bg-theme1">
  
 <div id="wrapper">
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="#">
       <img src="{{ asset('admin/assets/images/maquina-de-tatuaje.ico')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Titan Tattoo Studio</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">Menu</li>
      <li>
        <a href="{{ url('../perfiles') }}">
          <i class="zmdi zmdi-account-box"></i><span>Perfil</span>
        </a>
      </li>

      <li>
        <a href="{{ url('../clientes') }}">
          <i class="zmdi zmdi-account-add"></i><span>Clientes</span>
        </a>
      </li>
      <li>
        <a href="{{ url('../cataladmin') }}">
          <i class="zmdi zmdi-book-image"></i><span>Catalogos</span>
        </a>
      </li>
      <li>
        <a href="{{ url('../detalle_citas') }}">
          <i class="zmdi zmdi-balance-wallet"></i><span>Detalle de citas</span>
        </a>
      </li>
      <li>
        <a href="{{ url('../clcitas/vistaConsultar') }}">
          <i class="zmdi zmdi-assignment"></i><span>citas</span>
        </a>
      </li>
    </ul>
   </div>
 <header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top">
   <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" id="texto" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
         <div id="resultados" class="border"></div>
         <!--<script>
         window.addEventListener('load',function(){
        document.getElementById("texto").addEventListener("keyup"), () => {
            if((document.getElementById("texto").value.length)>=1)
                fetch(/barra/buscador?texto=$document.getElementById("texto").value=({ method:'get' })
                .then(response  =>  response.text() )
                .then(html      =>  {   document.getElementById("resultados").innerHTML = html  })
        }else{}
                document.getElementById("resultados").innerHTML = "";
        
    };    
         </script>-->
      </form>
    </li>
    
  </ul>
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Somerk </h6>
            <p class="user-subtitle">kremoso@gmail.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="/">Cerrar Sesion</a> </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">

      @yield('admins')

      </div>
	 </div>
	</div>
</form>
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">
      <p class="mb-0">Eligue un fondo</p>
      <hr>
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
      </ul>  
     </div>
   </div>
  </div>
  <script src="{{ asset('admin/assets/js/jquery.min.js')}}"></script>
   <script src="{{ asset('admin/assets/js/popper.min.js')}}"></script>
   <script src="{{ asset('admin/assets/js/bootstrap.min.js')}}"></script>
   <script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.js')}}"></script>
   <script src="{{ asset('admin/assets/js/sidebar-menu.js')}}"></script>
   <script src="{{ asset('admin/assets/js/jquery.loading-indicator.js')}}"></script>
   <script src="{{ asset('admin/assets/js/app-script.js')}}"></script>
   <script src="{{ asset('admin/assets/plugins/Chart.js/Chart.min.js')}}"></script>
   <script src="{{ asset('admin/assets/js/index.js')}}"></script>
</body>
</html>
