@extends('layouts.app')

@section('content')

<div class="col" id="app">
	<aceptar-solicitudes></aceptar-solicitudes>
</div>

@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection