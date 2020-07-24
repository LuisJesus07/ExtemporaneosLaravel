@extends('layouts.app')

@section('content')

   <div class="container" id="app">
    <crear-periodo />
   </div>

@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endsection