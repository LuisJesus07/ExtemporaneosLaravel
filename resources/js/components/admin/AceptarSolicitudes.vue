<template>
    <div class="card">
		<div class="card-header text-center" style="background-color: #132644;">
			<h2 class="display-5 text-white">Solicitudes en espera</h2>
		</div>
		<div class="card-body body-examenes table-responsive p-0">
            <div class="img-cargando text-center">
				<img src="app_assets/img/cargando.gif">
			</div>
			<table class="table table-hover rounded table-bordered">
				<thead class="thead-light">
					<tr>
						<th class="font-weight-bold">Número de control</th>
						<th class="font-weight-bold">Nombre</th>
						<th class="font-weight-bold">Apellido Paterno</th>
						<th class="font-weight-bold">Apellido Materno</th>
						<th class="font-weight-bold">Plan</th>
						<th class="font-weight-bold">Carrera</th>
						<th class="font-weight-bold">Materia</th>
                        <th class="font-weight-bold">Estado</th>
                        <th class="font-weight-bold">Aceptar</th>
					</tr> 
				</thead>
				<tbody>
					<tr v-for="(solicitud, index) in solicitudes" :key="index">
						<td>{{solicitud.user.num_control}}</td>
						<td>{{solicitud.user.nombre}}</td>
						<td>{{solicitud.user.apellido_paterno}}</td>
						<td>{{solicitud.user.apellido_materno}}</td>
						<td>{{solicitud.user.study_plan.nombre}}</td>
						<td>{{solicitud.user.study_plan.degree.nombre}}</td>
						<td>{{solicitud.subject.nombre}}</td>
                        <td class="text-danger font-weight-bold">Espera</td>	
                        <td>
                            <button class="btn btn-success" @click.prevent="aceptarSolicitud(solicitud.id,index)">Aceptar</button>
                        </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>

<script>
export default {
    data(){
        return{
            solicitudes: []
        }
    },
    created(){
        this.getSolicitudes()
    },
    methods:{
        getSolicitudes(){
            axios.get('/solicitudes/pendientes')
                .then((response) => {
                    this.solicitudes = response.data.exam_requests  
                })
                .catch((error) => {
                    console.log(error)
                });
        },
        aceptarSolicitud(idSolicitud,index){
            Swal.fire({
                title: '¿Desea aceptar esta solicitud?',
                text: "¡La solicitud sera aceptada!",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, aceptar!'
                }).then((result) => {
                    if (result.value) {
                        axios.get(`/solicitudes/aceptar/${idSolicitud}`)
                        .then(()=>{
                            this.solicitudes.splice(index, 1);//Eliminamos la solicitud del arreglo de la vista.
                        })
                        Swal.fire(
                            '¡Aceptada!',
                            'La solicitud ha sido aceptada.',
                            'success'
                        )
                        this.getSolicitudes()
                    }
            })
        }
    }
    

}
</script>