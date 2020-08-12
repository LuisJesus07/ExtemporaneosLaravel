<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark-gray">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      @if(Auth::user()->role->name === 'Alumno')
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/menu_alumno'}}" class="nav-link"><i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/solicitar_examen'}}" class="nav-link"><i class="fa fa-clipboard fa-fw"></i> Solicitar Examen</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/consultar_examen'}}" class="nav-link"><i class="fa fa-clipboard fa-fw"></i> Mis Exámenes</a>
        </li>
      @endif

      @if(Auth::user()->role->name === 'Administrador')
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/home'}}" class="nav-link"><i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/filtrado_busqueda'}}" class="nav-link"><i class="fa fa-clipboard fa-fw"></i> Ver Solicitudes</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/aceptar_solicitudes'}}" class="nav-link"><i class="fa fa-clipboard fa-fw"></i> Aceptar Solicitudes</a>
        </li>
      @endif
      
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('app_assets/dist/img/userIcon.jpg')}}" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">
            @auth
              {{Auth::user()->name}}
            @endauth
          </span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-secondary">
            <img src="{{asset('app_assets/dist/img/userIcon.jpg')}}" class="img-circle elevation-2" alt="User Image">

            <p>
              @auth
                {{Auth::user()->email}}
              @endauth
            </p>
          </li>
          
          <!-- Menu Footer-->
          <li class="user-footer bg-info">
            <a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Salir') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->