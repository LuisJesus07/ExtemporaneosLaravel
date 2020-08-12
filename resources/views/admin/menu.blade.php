@extends('layouts.app')

@section('content')

<div class="container">
   
    <div class="row">
        <div class="col-md-4">
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
        </div>
    </div>
</div>

@endsection