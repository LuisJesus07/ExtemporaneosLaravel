@extends('layouts.app')

@section('title')
  Configuraciones
@endsection

@section('content')

<div class="container">
        
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 28rem;">
                <div class="card-header text-center" style="background-color: #132644;">
                    <h2 class="display-5 text-white">Agregar nuevo período</h2>
                </div>
                <div class="card-body">
                    <p class="p">Agregue un nuevo período de solicitudes de exámenes extemporáneos. Fije la fecha de inicio y de fin del período de solicitudes.</p>
                    <a href="{{'/crear_periodo'}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Agregar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6" id="app">
            <desactivar-periodo />
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection