<template>
    <div class="card" style="width: 28rem;">
        <div class="card-header text-center" style="background-color: #132644;">
            <h2 class="display-5 text-white">Período de solicitudes</h2>
        </div>
        <div class="card-body">
            <p>Cuando el período este activo, los alumnos podrán realizar las solicitudes de exámenes, en caso de no estarlo, las solicitudes no serán registradas.</p>
            <div>
                <h4 class="alert alert-info font-weight-bold">Período Actual: {{nombrePeriodo}}</h4>
            </div>
            <div v-if="status == 'inactivo'">
                <h4 class="alert alert-warning font-weight-bold">Estado Actual: Inactivo</h4>
                <button class="btn btn-success float-right" @click.prevent="activarPeriodo()">Activar</button>
            </div>
            <div v-else>
                <h4 class="alert alert-success font-weight-bold">Estado Actual: Activo</h4>
                <button class="btn btn-danger float-right" @click.prevent="desactivarPeriodo()">Desactivar</button>
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
            status:'',
            nombrePeriodo:''
        }
    },
    methods:{
        verificarPeriodo() {
            axios.get('/get_estado_periodo')//Peticion para ver el estado del período
                .then((response) => {
                    this.status = response.data 
                })
                .catch((err) => {
                    //console.log(error.data)
                })

            axios.get('/show_period_active')//Peticion para traer el nombre del período actual
                .then((response) => {
                    this.nombrePeriodo = response.data.nombre 
                })
                .catch((err) => {
                    //console.log(error.data)
                })
        },
        activarPeriodo(){
            axios.get('/periodo_off')
                .then((response) => {
                    Swal.fire(
                        '¡Activado!',
                        'El período de solicitudes se encuentra activo.',
                        'success'
                    )
                    this.verificarPeriodo()

                })
                .catch((err) =>{
                    console.log(err)
                })
        },
        desactivarPeriodo(){
            axios.get('/periodo_off')
                .then((response) => {
                    Swal.fire(
                        '¡Desactivado!',
                        'El período de solicitudes se encuentra inactivo.',
                        'success'
                    )
                    this.verificarPeriodo()
                })
                .catch((err) =>{
                    console.log(err)
                })
        }
    }
}
</script>