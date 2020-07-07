@extends('layouts.app')

@section('page_title')
	Examenes por {{$title}} {{$solicitudes->nombre}}
@endsection

@section('content')

<div class="col">
	<div class="card">
		<div class="card-header text-center" style="background-color: #132644;">
			<h2 class="display-5 text-white">Exámenes por {{$title}}</h2>
		</div>
		<!--<div class="img-cargando">
			<img src="../../public/img/cargando.gif">
		</div>-->
		<div class="card-body body-examenes">
			<table class="table table-hover shadow p-3 mb-5 bg-white rounded table-bordered mt-2" id="tabla">
				<thead class="thead-light">
					<tr>
						<th class="text-secondary">Número de control</th>
						<th class="text-secondary">Nombre</th>
						<th class="text-secondary">Apellido Paterno</th>
						<th class="text-secondary">Apellido Materno</th>
						<th class="text-secondary">Plan</th>
						<th class="text-secondary">Carrera</th>
						<th class="text-secondary">Materia</th>
					</tr> 
				</thead>
				<tbody id="tbody-examenes">
				@if(isset($solicitudes) && count($solicitudes->exam_requests)>0)
					@foreach($solicitudes->exam_requests as $solicitud)
					<tr>
						<td>{{$solicitud->user->num_control}}</td>
						<td>{{$solicitud->user->nombre}}</td>
						<td>{{$solicitud->user->apellido_paterno}}</td>
						<td>{{$solicitud->user->apellido_materno}}</td>
						<td>{{$solicitud->user->study_plan->nombre}}</td>
						<td>{{$solicitud->user->study_plan->degree->nombre}}</td>
						<td>{{$solicitud->subject->nombre}}</td>	
					</tr>
					@endforeach
				@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection