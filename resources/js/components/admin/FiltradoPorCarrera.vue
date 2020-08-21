<template>

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h3 class="font-weight-bold">Por Carrera</h3>
            <form>

                <select class="form-control" v-model="carrera">
                    <option v-for="(carrera, index) in carreras" :key="index" v-bind:value="carrera.value">
                        {{ carrera.nombre }}
                    </option>
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
            carrera:'licenciatura_en_comunicacion',
            carreras:[
                {nombre:"Licenciatura en Comunicación", value:"licenciatura_en_comunicacion"},
                {nombre:"Licenciatura en Derecho", value:"licenciatura_en_derecho"},
                {nombre:"Derecho 2012", value:"derecho_2012"},
                {nombre:"Licenciatura en Criminología", value:"licenciatura_en_criminologia"},
                {nombre:"Licenciatura en Ciencias Políticas y Administración Pública", value:"licenciatura_en_CP_y_AP"}
            ]
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