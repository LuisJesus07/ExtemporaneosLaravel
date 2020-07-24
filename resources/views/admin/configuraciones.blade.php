@extends('layouts.app')

@section('content')

<div class="container">
        
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-header text-center" style="background-color: #132644;">
                    <h2 class="display-5 text-white">Agregar nuevo período</h2>
                </div>
                <div class="card-body">
                    <a href="{{'/crear_periodo'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Agregar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <div class="card-header text-center" style="background-color: #132644;">
                    <h2 class="display-5 text-white">Ver Períodos</h2>
                </div>
                <div class="card-body">
                    <a href="{{'/#'}}" class="btn mx-auto mt-3 btn-primary btn-lg">Agregar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection