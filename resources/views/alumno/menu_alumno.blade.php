@extends('layouts.app')

@section('content')

<div class="container">
        
    <div class="row">

        <div class="col-md-6">
            <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header text-white"
                style="background: url({{asset('app_assets/img/exam.jpg')}}) center center; filter: brightness(70%);">
            </div>
            <h2 class="widget-user-username text-right" style="position: absolute; color: white; left: 65%; top: 5%; margin-left: -45px; font-family: 'Oswald', sans-serif; font-size: 2rem">Solicitar</h2>
            <div class="widget-user-image">
                <img class="img-circle" src="{{asset('app_assets/img/solicitar.png')}}" style="background-color: darkseagreen" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                <div class="col-sm-4 border-right">
                    
                    <!-- /.description-block -->
                </div>
                <div class="col-sm-4 border-right">
                    <div class="description-block">
                    <h5 class="description-header"></h5>
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
                <a href="{{'/solicitar_examen'}}" style="width: 80%; background-color: #38c172; border-color: none; font-family: 'Oswald', sans-serif;" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
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
              <h2 class="widget-user-username text-right" style="position: absolute; color: white; left: 60%; top: 5%; margin-left: -45px; font-family: 'Oswald', sans-serif; font-size: 2rem">Exámenes</h2>
              <div class="widget-user-image">
                <img class="img-circle" src="{{asset('app_assets/img/consultarExamenes.png')}}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header"></h5>
                      <span class="description-text">EXÁMENES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-4">
                    
                    <!-- /.description-block -->
                  </div>
                </div>
                <div class="row">
                  <a href="{{'/consultar_examen'}}" style="width: 80%; background-color: #38c172; border-color: none; font-family: 'Oswald', sans-serif;" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
        </div>
        <!--<div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/solicitar.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold h3">Solicitar</h5>
                    <p class="card-text font-weight-bold"> Recuerda que para realizar tus solicitudes de exámenes extemporáneos, por reglamento se tiene derecho a dos exámenes por período, a partir de la tercera solicitud serán sujetas a aprobación.</p>
                    <a href="{{'/solicitar_examen'}}" class="btn mx-auto mt-3 btn-primary font-weight-bold">Solicitar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/consultarExamenes.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold h3">Mis Exámenes</h5>
                    <p class="card-text font-weight-bold">Consulta tus exámenes extemporáneos solicitados en el período actual. Ademas podras borrar tus exámenes si asi lo deseas, de esta forma cuando sea la captura de la información no se tomen en cuenta.</p>
                    <a href="{{'/consultar_examen'}}" class="btn mx-auto mt-3 btn-primary font-weight-bold">Ver</a>
                </div>
            </div>
        </div>-->
    </div>
</div>
  
@endsection