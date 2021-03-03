@extends('layouts.app')

@section('title')
  Panel Administrativo
@endsection

@section('head')
<!--Estilos css personalizados-->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')

<div class="col" id="app">
	<aceptar-solicitudes></aceptar-solicitudes>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/generarExcel.js')}}"></script>
@endsection