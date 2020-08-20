<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark-primary navbar-dark-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link font-weight-bold" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      @if(Auth::user()->role->name === 'Alumno')
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/menu_alumno'}}" class="nav-link font-weight-bold"><i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/solicitar_examen'}}" class="nav-link font-weight-bold"><i class="fa fa-clipboard fa-fw"></i> Solicitar Examen</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/consultar_examen'}}" class="nav-link font-weight-bold"><i class="fa fa-clipboard fa-fw"></i> Mis Exámenes</a>
        </li>
      @endif

      @if(Auth::user()->role->name === 'Administrador')
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/menu_admin'}}" class="nav-link font-weight-bold"><i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/filtrado_busqueda'}}" class="nav-link font-weight-bold"><i class="fa fa-clipboard fa-fw"></i> Ver Solicitudes</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{'/aceptar_solicitudes'}}" class="nav-link font-weight-bold"><i class="fa fa-clipboard fa-fw"></i> Aceptar Solicitudes</a>
        </li>
      @endif
      
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <ul class="navbar-nav ml-auto">
          <!-- Menu Footer-->
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ __('Cerrar Sesión') }}
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