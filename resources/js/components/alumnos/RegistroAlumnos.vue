<template>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Registrarme</p>
            <form @submit.prevent="agregar()">
                <div class="input-group mb-3">
                    <input type="number" v-model="alumno.numControl" class="form-control" placeholder="Número de Control"  maxlength="10" autofocus>          
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-tasks"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" v-model="alumno.nombre" class="form-control" placeholder="Nombre(s)"  maxlength="80">          
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" v-model="alumno.apellido_p" class="form-control" placeholder="Apellido Paterno"  maxlength="50">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" v-model="alumno.apellido_m" class="form-control" placeholder="Apellido Materno"  maxlength="50">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" v-model="alumno.email" class="form-control" placeholder="Correo"  maxlength="50">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" v-model="alumno.password" class="form-control" placeholder="Contraseña"  maxlength="16">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" v-model="alumno.study_plan_id">
                            <option value="1">Comunicación 2000</option>
                            <option value="2">Comunicación 2010</option>
                            <option value="3">Derecho 1993</option>
                            <option value="4">Derecho 2012</option>
                            <option value="5">Criminología 2018</option>
                            <option value="6">CP y AP 1978</option>
                            <option value="7">CP y AP 1995</option>
                    </select>     
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user-graduate"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn btn-block">
                    Registrarme
                </button>
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</template>

<script>
export default {
    data(){
        return{
            alumno:{
                numControl: '',
                nombre: '',
                apellido_p: '',
                apellido_m: '',
                email: '',
                password: '',
                study_plan_id: ''
            }

        }
    },
    methods:{
        agregar(){

            if(this.alumno.numControl === '' || this.alumno.nombre === '' || this.alumno.apellido_p === '' || this.alumno.apellido_m === '' || this.alumno.email === '' || this.alumno.password === '' || this.alumno.study_plan_id === ''){
                alert("¡Completa todos los campos!")
                return;
            }

            const alumnoNuevo = this.alumno//Se guarda el alumno nuevo 
            this.alumno = {//Se limpian los inputs
                numControl: '',
                nombre: '',
                apellido_p: '',
                apellido_m: '',
                email: '',
                password: '',
                study_plan_id: ''
            }

            axios.post('/registroUsuarios', alumnoNuevo)
                .then((res) => {
                    console.log(res.data);

                })


        }
    }
    
}
</script>