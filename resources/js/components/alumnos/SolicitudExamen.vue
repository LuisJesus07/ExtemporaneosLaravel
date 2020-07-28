<template>
    <div>
        <div class="card-header text-center text-white" style="background-color: #132644;">
            <h2 class="display-5 font-weight-bold">Solicitar Examen</h2>
        </div>
        <div class="card-body">
            <div class="container-fluid mt-4">
                <b>Seleccione su semestre, una materia y de clic en el botón enviar para mandar su solicitud.</b>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <form @submit.prevent="insertSolicitud()"> 
                            <div class="card card-body">
                                <label for="" class="text-secondary mt-3">Semestre:</label>
                                <select @change="getMaterias()" v-model="semester_id" class="form-control shadow-sm" required id="select_semester">
                                    <option value="" disabled selected>Seleccione el Semestre...</option>
                                    <option value="1">1ero</option>
                                    <option value="2">2do</option>
                                    <option value="3">3ero</option>
                                    <option value="4">4to</option>
                                    <option value="5">5to</option>
                                    <option value="6">6to</option>
                                    <option value="7">7mo</option>
                                    <option value="8">8vo</option>
                                    <option value="9">9no</option>
                                    <option value="10">10mo</option>
                                </select>
                                <label for="" class="text-secondary mt-3">Materia:</label>
                                <select v-model="idMateria" class="form-control shadow-sm" required id="select_materias">
                                    <option v-for="(materia, index) in materias" :key="index" :value="materia.id">
                                        {{materia.nombre}}</option>
                                </select>
                            </div>
                                
                            <div class="alert alert-warning mt-3" role="alert">
                                <img src="app_assets/img/alerta.png" width="25">
                                A partir de la tercera solicitud serán sometidas a revisión para su autorización.
                            </div>
                            <button type="submit" class="btn btn-success float-right">Enviar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    created(){
        this.verificarPeriodo()
    },
    data(){
        return{
            materias: [],
            idMateria:'',
            semester_id:''
        }
    },
    methods:{
        getMaterias(){
            
            axios.get(`/get_materias/${this.semester_id}`)
                .then((response) => {
                    this.materias = response.data;
                    //console.log(this.materias)
                })
                .catch((error) => {
                    console.log(error)
                });

        },
        insertSolicitud(){

            axios.get(`/create_solicitud/${this.idMateria}`)
                .then((response) => {

                    console.log(response.data);
                
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '¡Solicitud realizada con éxito!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                    
                    this.semester_id = ''//Limpiamos el v-model del id semestre
                    this.idMateria = ''//Limpiamos el v-model del id materia
                
                })
                .catch((error) => {
                    //console.log(error.data);
                     Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: '¡Error en la solicitud!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                });
        },
        verificarPeriodo(){

            axios.get('/get_estado_periodo_alumno')
                .then((response) => {
                    let estadoPeriodo = response.data

                    if(estadoPeriodo === 'inactivo'){

                        Swal.fire({
                            title: "Período inactivo",
                            text: "¡El período de solicitudes se encuentra inactivo!",
                            icon: "warning",
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: "Aceptar",
              
					    }).then(() => {
                            location.href = 'menu_alumno'
                        })
                        
                    }else{//Si el período esta activo cargamos las materias
                        //this.getMaterias()
                    }
                })
                .catch((err) =>{
                    console.log(err)
                })
        }
    }
}
</script>