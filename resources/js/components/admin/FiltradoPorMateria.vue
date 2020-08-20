<template>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Por Materia</h3>
                <form>
                    <label>Plan: </label>
                    <select class="form-control" @change="getMaterias()" v-model="planId">
                        <option value="1">Comunicación 2000</option>
                        <option value="2">Comunicación 2010</option>
                        <option value="3">Derecho 1993</option>
                        <option value="4">Derecho 2012</option>
                        <option value="5">Criminología 2018</option>
                        <option value="6">CP y AP 1978</option>
                        <option value="7">CP y AP 1995</option>
                    </select>

                    <label>Materia: </label>
                    <select class="form-control" v-model="materia" >
                        <option v-for="(materia, index) in materias" :key="index" :value="materia.slug">
                            {{materia.nombre}}</option>
                    </select><br>
                
                    <button class="btn btn-success" @click.prevent="click()">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            planId: 0,
            materia:'',
            materias: []
        }
    },
    methods:{
        getMaterias(){
            axios.get(`/materias_plan/${this.planId}`)
                .then((response) => {
                    this.materias = response.data;
                    //console.log(this.materias)
                    
                })
                .catch((error) => {
                    console.log(error)
                });
        },
        click(){
            window.location.href = "/solicitudes/materia/"+this.materia
            this.planId = ''
            this.materia = ''

        }
    }
    
}
</script>