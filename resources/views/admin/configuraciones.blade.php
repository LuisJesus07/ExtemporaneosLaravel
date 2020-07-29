@extends('layouts.app')

@section('content')

<div class="container">
        
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 28rem;">
                <div class="card-header text-center" style="background-color: #132644;">
                    <h2 class="display-5 text-white">Agregar nuevo período</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae vitae officiis explicabo quia sapiente, dolore fugit iusto dolorum optio? Explicabo earum dicta harum inventore autem corporis magni cum dolore possimus.</p>
                    <a href="{{'/crear_periodo'}}" class="btn btn-primary float-right">Agregar</a>
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