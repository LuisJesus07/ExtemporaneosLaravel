@extends('admin.index')

@section('content')

<div class="container">
    <h1 class="text-center mb-4">Panel Administrador</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/consultarExamenes.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ver Solicitudes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{'/filtrado_busqueda'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/solicitar.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aceptar Solicitudes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{'/aceptar_solicitudes'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/config.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Configuraciones</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{'/configuraciones'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection