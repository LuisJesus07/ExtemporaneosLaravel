<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #132644;">
    <!-- Brand Logo -->
    @if(Auth::user()->role->name === 'Alumno')
    <a href="{{'/menu_alumno'}}" class="brand-link">
      <img src="{{asset('app_assets/dist/img/uabcs.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Extemporáneos</span>
    </a>
    @endif

    @if(Auth::user()->role->name === 'Administrador')
    <a href="{{'/menu_admin'}}" class="brand-link">
      <img src="{{asset('app_assets/dist/img/uabcs.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Extemporáneos</span>
    </a>
    @endif

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('app_assets/dist/img/userIcon.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          @auth
            {{ Auth::user()->nombre }}
          @endauth
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @if(Auth::user()->role->name === 'Alumno')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{'/solicitar_examen'}}" class="nav-link {{ (request()->is('cities*')) ? 'active' : '' }}">
                <i class="fa fa-clipboard fa-fw"></i>
                <p>
                  Solicitar Examen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{'/consultar_examen'}}" class="nav-link {{ (request()->is('cities*')) ? 'active' : '' }}">
                <i class="fa fa-clipboard fa-fw"></i>
                <p>
                  Mis Exámenes
                </p>
              </a>
            </li>
        </ul>
      </nav>
      @endif
      @if(Auth::user()->role->name === 'Administrador')
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{'/filtrado_busqueda'}}" class="nav-link {{ (request()->is('cities*')) ? 'active' : '' }}">
                <i class="fa fa-clipboard fa-fw"></i>
                <p>
                  Ver Solicitudes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{'/aceptar_solicitudes'}}" class="nav-link {{ (request()->is('cities*')) ? 'active' : '' }}">
                <i class="fa fa-clipboard fa-fw"></i>
                <p>
                  Aceptar Solicitudes
                </p>
              </a>
            </li>
        </ul>
      </nav>
      @endif
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

  