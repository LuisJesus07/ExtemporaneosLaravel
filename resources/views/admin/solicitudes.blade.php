@extends('layouts.app')

@section('page_title')
	Examenes por {{$title}} 
	@if(isset($solicitudes->nombre))
		{{$solicitudes->nombre}}
	@endif
@endsection

@section('head')
<!--Estilos css personalizados-->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')

<div class="col">
	<div class="card">
		<div class="card-header text-center" style="background-color: #132644;">
			<h2 class="display-5 text-white">Exámenes por {{$title}}</h2>
		</div>
		<div class="card-body body-examenes">
			<div class="img-cargando text-center">
				<img src="{{asset('app_assets/img/cargando.gif')}}">
			</div>
			<table class="table table-hover shadow p-3 mb-5 bg-white rounded table-bordered mt-2" id="tabla">
				<thead class="thead-light">
					<tr>
						<th class="font-weight-bold">Número de control</th>
						<th class="font-weight-bold">Nombre</th>
						<th class="font-weight-bold">Apellido Paterno</th>
						<th class="font-weight-bold">Apellido Materno</th>
						<th class="font-weight-bold">Plan</th>
						<th class="font-weight-bold">Carrera</th>
						<th class="font-weight-bold">Materia</th>
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

@section('scripts')
<script type="text/javascript" src="{{asset('app_assets/plugins/buttons/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/buttons/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/buttons/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/buttons/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/buttons/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/buttons/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/buttons/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('app_assets/plugins/generarExcel.js')}}"></script>
@endsection