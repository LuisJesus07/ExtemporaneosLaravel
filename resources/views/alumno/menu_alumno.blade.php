@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/solicitar.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Solicitar</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{'/solicitar_examen'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Solicitar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/consultarExamenes.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mis Exámenes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{'/consultar_examen'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Ver</a>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection