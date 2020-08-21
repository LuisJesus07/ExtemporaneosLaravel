<template>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Por Materia</h3>
                <form>
                    <label>Plan: </label>
                    <select class="form-control" @change="getMaterias()" v-model="selectPlanId">
                        <option value="" disabled selected>Seleccione un plan...</option>
                        <option v-for="(plan, index) in planes" :key="index" v-bind:value="plan.value">
                            {{ plan.nombre }}
                        </option>
                    </select>

                    <label>Materia: </label>
                    <select class="form-control" v-model="selectMateria" id="selectMateria">
                        <option value="" disabled selected>Seleccione una materia...</option>
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
            selectPlanId:'',
            selectMateria:'',
            materias: [],
            planes:[
                {nombre:"Comunicación 2000", value:"1"},
                {nombre:"Comunicación 2010", value:"2"},
                {nombre:"Derecho 1993", value:"3"},
                {nombre:"Derecho 2012", value:"4"},
                {nombre:"Criminología 2018", value:"5"},
                {nombre:"CP Y AP 1978", value:"6"},
                {nombre:"CP Y AP 1995", value:"7"}
            ]
        }
    },
    mounted(){
        document.getElementById('selectMateria').disabled=true;//Habilito el select al cargar la pagina como apagado
    },
    methods:{
        getMaterias(){
            this.selectMateria = ''
            document.getElementById('selectMateria').disabled=true;//Habilito el select al cargar la pagina como apagado

            axios.get(`/materias_plan/${this.selectPlanId}`)
                .then((response) => {
                    this.materias = response.data;
                    document.getElementById('selectMateria').disabled=false;//Habilito el select a activo cuando obtengo la data
                    
                })
                .catch((error) => {
                    console.log(error)
                });
        },
        click(){
            window.location.href = "/solicitudes/materia/"+this.selectMateria
            this.selectPlanId = ''
            this.selectMateria = ''

        }
    }
    
}
</script>