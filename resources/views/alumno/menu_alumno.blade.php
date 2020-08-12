@extends('layouts.app')

@section('content')

<div class="container">
        
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/solicitar.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold h3">Solicitar</h5>
                    <p class="card-text font-weight-bold"> Recuerda que para realizar tus solicitudes de exámenes extemporáneos, por reglamento se tiene derecho a dos exámenes por período, a partir de la tercera solicitud serán sujetas a aprobación.</p>
                    <a href="{{'/solicitar_examen'}}" class="btn mx-auto mt-3 btn-primary font-weight-bold">Solicitar</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('app_assets/img/consultarExamenes.png')}}" class="d-block mx-auto img" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold h3">Mis Exámenes</h5>
                    <p class="card-text font-weight-bold">Consulta tus exámenes extemporáneos solicitados en el período actual. Ademas podras borrar tus exámenes si asi lo deseas, de esta forma cuando sea la captura de la información no se tomen en cuenta.</p>
                    <a href="{{'/consultar_examen'}}" class="btn mx-auto mt-3 btn-primary font-weight-bold">Ver</a>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection