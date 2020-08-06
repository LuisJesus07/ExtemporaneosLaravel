<template>
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="width:100%;">
                <div class="card-header text-center" style="background-color: #132644;">
                    <h2 class="display-5 text-white">Agregar nuevo período</h2>
                </div>
                <div class="card-body">
                    <form @submit.prevent="crearPeriodo()"> 
                        <div class="input-group mb-3">
                            <label class="mr-2" for="">Nombre del Período:</label>
                            <input type="text" v-model="nombre" class="form-control" placeholder="Nombre del período" autofocus required>          
                        </div>
                        <div class="input-group mb-3">
                            <label class="mr-2" for="">Fecha de inicio:</label>
                            <input type="date" v-model="fecha_inicio" class="form-control" placeholder="Fecha de inicio" required>          
                        </div>
                        <div class="input-group mb-3">
                            <label class="mr-2" for="">Fecha de fin:</label>
                            <input type="date" v-model="fecha_fin" class="form-control" placeholder="Fecha Final" required>
                        </div>
                        <div class="alert alert-warning mt-3" role="alert">
                            <img src="app_assets/img/alerta.png" width="25">
                            Al agregar un nuevo periodo se eliminará la información del periodo pasado.
                            Agregue uno nuevo una vez que toda la información del periodo actual haya sido capturada.
                        </div>
                        <button type="submit" class="btn btn-success float-right">
                            Agregar
                        </button>
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
           
            nombre: '',
            fecha_inicio: '',
            fecha_fin: ''
        
        }
    },
    methods:{
        crearPeriodo(){
           
            axios.post('/periodo_create', {
                nombre: this.nombre,
                fecha_inicio: this.fecha_inicio,
                fecha_fin: this.fecha_fin
            })
            .then((res) => {
                this.nombre = '',
                this.fecha_inicio = '',
                this.fecha_fin = ''
                if(res.data === 'Periodo agregado'){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '¡Período agregado con éxito!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Ocurrio un error!',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            })
            .catch((err) => {
                console.log(err.data)
            })
        }
    }
    
}
</script>