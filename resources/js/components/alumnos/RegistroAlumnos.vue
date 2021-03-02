<template>
    <div class="card">
        <div class="card-body register-card-body">
            <img src="iconos/load.gif" class="loading" ref="loading">
            <h4 class="login-box-msg font-weight-bold">Registrarme</h4>
            <form @submit.prevent="agregar()">
                <div class="error font-weight-bold" role="alert" v-for="(error, index) in errors" :key="index" v-bind:class="{exito:success==true}">{{error}}</div>
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
                            <option value="" disabled selected>Plan de estudio:</option>
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
                <div class="row">
                    <div class="col-5">
                        <div class="mt-2">
                            <a href="login" class="text-center">Iniciar Sesión</a>   
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-7">
                        <button type="submit" class="btn btn-success btn-block font-weight-bold">
                            Registrarme
                        </button>                   
                    </div>
                    <!-- /.col -->
                </div> 
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
            },
            errors:[],//Arreglo para guardar los errores
            success:false//Variable para cambiar el alert,

        }
    },
    methods:{
        agregar(){

            if(this.alumno.num_control.trim() === '' || this.alumno.nombre.trim() === '' || this.alumno.apellido_paterno.trim() === '' || this.alumno.apellido_materno.trim() === '' || this.alumno.email.trim() === '' || this.alumno.password.trim() === '' || this.alumno.study_plan_id.trim() === ''){
                this.errors = []
                this.errors.push("Complete todos los campos.")
                this.success = false//Si esta en false se muestra el div en rojo
                
                return;
            }

            //aparecer carga
            const _this = this
            this.$refs.loading.style.display = 'block'

            const alumnoNuevo = this.alumno//Se guarda el alumno nuevo 
            
            axios.post('/registroUsuarios', alumnoNuevo)
                .then((res) => {
                    
                    //console.log(res.data)
                    if(res.data === 'Usuario creado'){
                        
                        this.errors = []
                        this.errors.push("¡Registro realizado con éxito!")
                        this.success = true//Si esta true se muestra el alert verde

                        //redirect al home
                        window.location.href = "http://127.0.0.1:8000/menu_alumno";

                        this.alumno = {//Se limpian los inputs
                            num_control: '',
                            nombre: '',
                            apellido_paterno: '',
                            apellido_materno: '',
                            email: '',
                            password: '',
                            study_plan_id: ''
                        }

                         
                    }

                    //si el reponse trae el array de errores, mostrarlos
                    if(res.data.errors !== undefined ){

                        //limpiar el array de errores
                        this.errors = []

                        //poner los errores en el array errors
                        for (var i = 0; i < res.data.errors.length ; i++) {
                           this.errors.push(res.data.errors[i])
                        }
                    }
                    

                })
                .catch(err => {
                    console.log(err)
                })
                .then(function() {
                    //desaparecer carga
                    _this.$refs.loading.style.display = 'none'
                });


        }
    }
    
}
</script>

<style>

.loading{
    float: left;
    display: none;
    width: 30px;
}

.error{
	margin:auto;
	text-align: center;
	width: 100%;
	margin-top: 2%;
	margin-bottom: 2%;
	padding-top: 1%;
	padding-bottom: 1%;
	color: #a94442;
	background-color: #f2dede;
	border-radius: 4px;
	border: 1px solid #a94442;
}

.exito{
    margin:auto;
	text-align: center;
	width: 100%;
	margin-top: 2%;
	margin-bottom: 2%;
	padding-top: 1%;
	padding-bottom: 1%;
	border-radius: 4px;
	background-color: #dff0d8;
	border: 1px solid #008100;
	color: #3c763d;
}

</style>