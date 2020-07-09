<template>
    <div class="card">
        <div class="card-body register-card-body">
            <h4 class="login-box-msg">Registrarme</h4>
            <form @submit.prevent="agregar()">
                <div class="input-group mb-3">
                    <input type="number" v-model="alumno.num_control" class="form-control" placeholder="Número de Control"  maxlength="10" autofocus>          
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
                    <input type="text" v-model="alumno.apellido_paterno" class="form-control" placeholder="Apellido Paterno"  maxlength="50">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" v-model="alumno.apellido_materno" class="form-control" placeholder="Apellido Materno"  maxlength="50">
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
                            <option value="" disabled selected>Plan de estudio</option>
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
                num_control: '',
                nombre: '',
                apellido_paterno: '',
                apellido_materno: '',
                email: '',
                password: '',
                study_plan_id: ''
            }

        }
    },
    methods:{
        agregar(){

            if(this.alumno.num_control === '' || this.alumno.nombre === '' || this.alumno.apellido_paterno === '' || this.alumno.apellido_materno === '' || this.alumno.email === '' || this.alumno.password === '' || this.alumno.study_plan_id === ''){
                alert("¡Completa todos los campos!")
                return;
            }

            const alumnoNuevo = this.alumno//Se guarda el alumno nuevo 
            this.alumno = {//Se limpian los inputs
                num_control: '',
                nombre: '',
                apellido_paterno: '',
                apellido_materno: '',
                email: '',
                password: '',
                study_plan_id: ''
            }

            axios.post('/registroUsuarios', alumnoNuevo)
                .then((res) => {
                    
                    if(res.data === 'usuario creado'){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Registro realizado con éxito!',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }else{
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Ocurrio un error!',
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }
                    

                })


        }
    }
    
}
</script>