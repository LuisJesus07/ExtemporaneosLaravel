@extends('alumno.index')

@section('content')
<div class="col" id="app">

    <solicitud-examen />
    
</div>
@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection