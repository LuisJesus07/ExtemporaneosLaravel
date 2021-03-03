@extends('layouts.app')

@section('title')
  Solicitud de exámenes extemporáneos
@endsection

@section('content')
<div class="col" id="app">

    <solicitud-examen />
    
</div>
@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection