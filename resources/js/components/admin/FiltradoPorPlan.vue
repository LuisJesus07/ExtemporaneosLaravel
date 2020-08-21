<template>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Por Plan</h3>

                <form>
                    <select class="form-control" v-model="plan">
                        <option v-for="(plan, index) in planes" :key="index" v-bind:value="plan.value">
                            {{ plan.nombre }}
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
            plan:'comunicacion_2000',
            planes:[
                {nombre:"Comunicación 2000", value:"comunicacion_2000"},
                {nombre:"Comunicación 2010", value:"comunicacion_2010"},
                {nombre:"Derecho 1993", value:"derecho_1993"},
                {nombre:"Derecho 2012", value:"derecho_2012"},
                {nombre:"Criminología 2018", value:"criminologia_2018"},
                {nombre:"CP Y AP 1978", value:"CP_y_AP_1978"},
                {nombre:"CP Y AP 1995", value:"CP_y_AP_1995"}
            ]
        }
    },
    methods:{
        click(){
            //console.log(this.plan)
            window.location.href = "/solicitudes/plan/"+this.plan
            this.plan = ''

        }
    }
    
}
</script>