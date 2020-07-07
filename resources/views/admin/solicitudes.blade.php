@extends('layouts.app')

@section('content')

<div class="col">
	<div class="card">
		<div class="card-header text-center" style="background-color: #132644;">
			<h2 class="display-5 text-white">Exámenes Por Carrera</h2>
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
				@if(isset($solicitudes) && count($solicitudes)>0)
					@foreach($solicitudes as $solicitud)
					<tr>
						<td>{{$solicitud->num_control}}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>	
					</tr>
					@endforeach
				@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection