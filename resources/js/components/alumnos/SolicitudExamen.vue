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
                        <form> 
                            <div class="card card-body">
                                <label for="" class="text-secondary mt-3">Semestre:</label>
                                <select @change="getMaterias()" v-model="solicitud.semester_id" class="form-control shadow-sm" required id="semester_id">
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
                                <select class="form-control shadow-sm" required>
                                    
                                    <option v-for="(materia, index) in materias" :key="index" :value="materia.id">
                                        {{materia.nombre}}</option>
                                </select>
                            </div>
                                
                            <div class="alert alert-warning mt-3" role="alert">
                                <img src="app_assets/img/alerta.png" width="25">
                                A partir de la tercera solicitud serán sometidas a revisión para su autorización.
                            </div>
                            <!--<input type="submit" name="" class="btn btn-primary btn-block" value="Enviar">-->
                            <button class="btn btn-success float-right">Enviar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            materias: [],
            solicitud:{idMateria:'', semester_id:''},
        }
    },
    created(){
        
    },
    methods:{
        getMaterias(){
            
            axios.get(`/get_materias/${this.solicitud.semester_id}`)
                .then((response) => {
                    this.materias = response.data;
                    //console.log(this.materias)
                })
                .catch(err => {
                    console.log(err)
                });

        }
    }
}
</script>