@extends('layouts.app')

@section('head')
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="container">
   
    <div class="row">
        <div class="col-md-6">
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url({{asset('app_assets/img/exam.jpg')}}) center center; filter: brightness(70%);">
              </div>
              <h2 class="widget-user-username text-right" style="position: absolute; color: white; left: 65%; top: 5%; margin-left: -45px; font-family: 'Oswald', sans-serif; font-size: 2rem">Solicitudes</h2>
              <div class="widget-user-image">
                <img class="img-circle" src="{{asset('app_assets/img/vision.png')}}" style="background-color: darkseagreen" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{$solicitudes->all}}</h5>
                      <span class="description-text">TOTAL</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    
                    <!-- /.description-block -->
                  </div>
                </div>
                <div class="row">
                  <a href="{{'/filtrado_busqueda'}}" style="width: 80%; background-color: #38c172; border-color: none; font-family: 'Oswald', sans-serif;" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url({{asset('app_assets/img/aceptar.jpg')}}) center center; filter: brightness(70%);">
              </div>
              <h2 class="widget-user-username text-right" style="position: absolute; color: white; left: 60%; top: 5%; margin-left: -45px; font-family: 'Oswald', sans-serif; font-size: 2rem">Aceptar Solicitudes</h2>
              <div class="widget-user-image">
                <img class="img-circle" src="{{asset('app_assets/img/prueba.png')}}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{$solicitudes->pendientes}}</h5>
                      <span class="description-text">PENDIENTES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4">
                    
                    <!-- /.description-block -->
                  </div>
                </div>
                <div class="row">
                  <a href="{{'/aceptar_solicitudes'}}" style="width: 80%; background-color: #38c172; border-color: none; font-family: 'Oswald', sans-serif;" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url({{asset('app_assets/img/config-2.jpg')}}) center center; filter: brightness(70%);">
              </div>
              <h2 class="widget-user-username text-right" style="position: absolute; color: white; left: 65%; top: 5%; margin-left: -45px; font-family: 'Oswald', sans-serif; font-size: 2rem">Configuraciones</h2>
              <div class="widget-user-image">
                <img class="img-circle" src="{{asset('app_assets/img/engranajes.png')}}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">{{$period->nombre}}</h5>
                      <span class="description-text">PERIODO ACTUAL</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4">
                    
                    <!-- /.description-block -->
                  </div>
                </div>
                <div class="row">
                  <a href="{{'/configuraciones'}}" style="width: 80%; background-color: #38c172; border-color: none; font-family: 'Oswald', sans-serif;" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
        </div>

        <!--<div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/consultarExamenes.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold h3">Ver Solicitudes</h5>
                    <p class="card-text">En este módulo podras visualizar las solicitudes de exámenes extemporáneos. Ya sea por plan, por carrera o por materia.</p>
                    <a href="{{'/filtrado_busqueda'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/solicitar.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold h3">Aceptar Solicitudes</h5>
                    <p class="card-text">En este módulo podras aceptar solicitudes pendientes. Aparecerán las solicitudes cuando el alumno exeda las dos solicitudes disponibles.</p>
                    <a href="{{'/aceptar_solicitudes'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/config.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold h3">Configuraciones</h5>
                    <p class="card-text">En este módulo podras configurar algunos ajustes, como agregar un nuevo período o activar/desactivar las solicitudes de exámenes.</p>
                    <a href="{{'/configuraciones'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                </div>
            </div>
        </div>-->
    </div>
</div>

@endsection