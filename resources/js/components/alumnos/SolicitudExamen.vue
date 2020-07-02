<template>
    <div>
        <div class="card-header text-center text-white" style="background-color: #132644;">
            <h2 class="display-5 font-weight-bold">Solicitar Examen</h2>
        </div>
        <div class="card-body">
            <div class="container-fluid mt-4">
                <b>Seleccione una materia y de clic en el botón enviar para mandar su solicitud.</b>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST"> 
                            <div class="card card-body">
                                <label for="" class="text-secondary mt-3">Materia:</label>
                                <select class="form-control shadow-sm" required >
                                    <option value="" disabled selected>Seleccione una materia...</option>
                                    

                                </select>
                            </div>
                                
                            <div class="alert alert-warning mt-3" role="alert">
                                <img src="app_assets/img/alerta.png" width="25">
                                A partir de la tercera solicitud serán sometidas a revisión para su autorización.
                            </div>
                            <!--<input type="submit" name="" class="btn btn-primary btn-block" value="Enviar">-->
                            <button class="btn btn-success float-right">Enviar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>