<template>
    <div class="card" style="width: 38rem;">
        <div class="card-header text-center" style="background-color: #132644;">
            <h2 class="display-5 text-white">Período de solicitudes</h2>
        </div>
        <div class="card-body">
            <p>Cuando el período este activo, los alumnos podrán realizar las solicitudes de exámenes, en caso de no estarlo, las solicitudes no serán registradas.</p>
            <div v-if="status == 'inactivo'">
                <h4 class="alert alert-warning">Estado Actual : Inactivo</h4>
                <button class="btn btn-success float-right" @click.prevent="activarPeriodo()">Activar</button>
            </div>
            <div v-else>
                <h4 class="alert alert-success">Estado Actual : Activo</h4>
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
            status:''
        }
    },
    methods:{
        verificarPeriodo() {
            axios.get('/get_estado_periodo')
                .then((response) => {
                    this.status = response.data 
                    //console.log(this.status)
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
                        'El periodo de solicitudes se encuentra activo.',
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
                        'El periodo de solicitudes se encuentra inactivo.',
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

<style>

.btn-estado-periodo {
    color: white!important;
}
.btn-estado-periodo:hover {
    transition: all linear .3s;
    transform: scale(1.1);
    cursor: pointer;
}

</style>