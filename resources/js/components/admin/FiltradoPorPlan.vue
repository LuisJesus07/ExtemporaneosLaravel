<template>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h3>Por Plan</h3>

                <form>
                    <select class="form-control" v-model="plan">
                        <option value="comunicacion_2000">Comunicación 2000</option>
                        <option value="comunicacion_2010">Comunicación 2010</option>
                        <option value="derecho_1993">Derecho 1993</option>
                        <option value="derecho_2012">Derecho 2012</option>
                        <option value="criminologia_2018">Criminología 2018</option>
                        <option value="CP_y_AP_1978">CP y AP 1978</option>
                        <option value="CP_y_AP_1995">CP y AP 1995</option>
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
            plan: ''
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