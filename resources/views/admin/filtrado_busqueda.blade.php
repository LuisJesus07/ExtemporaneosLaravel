@extends('admin.index')

@section('content')
<div class="row">
    
    <div class="col text-center">
        <div class="card-header text-center text-white" style="background-color: #132644;">
            <h3 class="display-5">Filtrar Búsqueda</h3>
        </div>
        

        <div class="row principal mx-auto mt-5">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Por Carrera</h3>
                        <form method="POST" action="">

                            <select class="form-control" name="carrera">
                                <option>Licenciatura en Comunicación</option>
                                <option>Licenciatura en Derecho</option>
                                <option>Licenciatura en Criminología</option>
                                <option>Licenciatura en Ciencias Políticas y Administración Pública</option>
                            </select><br>

                            <input class="btn btn-success" type="submit" name="" value="Buscar">
                        
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Por Plan</h3>

                        <form method="POST" action="">

                            <select class="form-control" name="plan">
                                <option>Comunicación 2000</option>
                                <option>Comunicación 2010</option>
                                <option>Derecho 1993</option>
                                <option>Derecho 2012</option>
                                <option>Criminología 2018</option>
                                <option>CP y AP 1978</option>
                                <option>CP y AP 1995</option>
                            </select><br>

                            <input class="btn btn-success" type="submit" name="" value="Buscar">
                        
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4" id="app">
                <div class="card">
                    <div class="card-body">
                        <h3>Por Materia</h3>
                        <form method="POST" action="">

                            <label class="display-5">Plan:</label>
                            <select class="form-control">
                                <option value="1">Comunicación 2000</option>
                                <option value="2">Comunicación 2010</option>
                                <option value="3">Derecho 1993</option>
                                <option value="4">Derecho 2012</option>
                                <option value="5">Criminología 2018</option>
                                <option value="6">CP y AP 1978</option>
                                <option value="7">CP y AP 1995</option>
                            </select>

                            
                            <label>Materia: </label>
                            <select class="form-control"name="materia" >
                                <option </option>
                            </select><br>
                            

                            <input class="btn btn-success" type="submit" name="" value="Buscar">
                        
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    
</div><!-- body-row END -->

@endsection