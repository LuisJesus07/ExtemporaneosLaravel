<template>
    <div>
        <div class="card-header text-center text-white" style="background-color: #132644;">
            <h2 class="display-5 font-weight-bold">Mis Exámenes</h2>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover rounded table-bordered">
                <thead class="thead-light">
                <tr>
                    <th class="font-weight-bold">Materia</th>
                    <th class="font-weight-bold">Estado</th>
                    <th class="font-weight-bold">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="(solicitud, index) in solicitudes" :key="index" v-bind:class="{pendiente: solicitud.status == 0}">
                        <td>{{solicitud.subject.nombre}}</td>
                        <td v-if="solicitud.status==1">Aceptado</td>
                        <td v-else>Espera</td>
                        <td><button class="btn btn-danger btn-sm" @click.prevent="deleteSolicitud(solicitud.id,index)" 
                        ><i class="fas fa-trash-alt"></i></button></td>
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
            solicitudes: [],
        }
    },
    created(){
        this.getSolicitudes()
    },
    methods:{
        getSolicitudes(){

            axios.get('/solicitudes')
                .then((response) => {
                    //console.log(response.data[0].exam_requests)
                    this.solicitudes = response.data[0].exam_requests
                })
                .catch((error) => {
                    console.log(error)
                });
        },
        deleteSolicitud(idSolicitud, index){
           Swal.fire({
                title: '¿Estas seguro(a)?',
                text: "La solicitud se eliminará!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar!'
                }).then((result) => {
                    if (result.value) {
                        axios.get(`/delete_solicitud/${idSolicitud}`)
                        .then(()=>{
                            this.solicitudes.splice(index, 1);//Eliminamos la solicitud del arreglo de la vista.
                        })
                        Swal.fire(
                            'Eliminado!',
                            'La solicitud ha sido eliminada.',
                            'success'
                        )
                        this.getSolicitudes()
                    }
            })
        }

    }
}
</script>

<style>
.pendiente {
    background-color: #f5d4d7 !important;
}
</style>