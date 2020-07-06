<template>

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h3>Por Carrera</h3>
            <form>

                <select class="form-control" v-model="carrera">
                    <option value="licenciatura_en_comunicacion">Licenciatura en Comunicación</option>
                    <option value="licenciatura_en_derecho">Licenciatura en Derecho</option>
                    <option value="licenciatura_en_criminologia">Licenciatura en Criminología</option>
                    <option value="licenciatura_en_CP_y_AP">Licenciatura en Ciencias Políticas y Administración Pública</option>
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
            carrera:''
        }
    },
    methods:{
        click(){
            //console.log(this.carrera)
            window.location.href = "/solicitudes/carrera/"+this.carrera
            this.carrera = ''
        }
    }
}
</script>