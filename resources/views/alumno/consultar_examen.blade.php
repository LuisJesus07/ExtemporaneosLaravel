@extends('layouts.app')

@section('content')

<div class="card mt-2" id="app">
    <consultar-examen />         
</div>

   
@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection