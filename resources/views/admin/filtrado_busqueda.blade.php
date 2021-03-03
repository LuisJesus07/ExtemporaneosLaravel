@extends('layouts.app')

@section('title')
  Panel Administrativo
@endsection

@section('content')
<div class="row" id="app">
    
    <div class="col text-center">
        <div class="card-header text-center text-white" style="background-color: #132644;">
            <h2 class="display-5 text-white">Filtrar Búsqueda</h2>
        </div>
        <div class="row principal mx-auto mt-5">

            <filtrar-carrera></filtrar-carrera>

            <filtrar-plan></filtrar-plan>

            <filtrar-materia></filtrar-materia>
            

        </div>
    </div>
    
</div><!-- body-row END -->

@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection