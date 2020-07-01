<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Extemporáneos | Registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('app_assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('app_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('app_assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Akronim");
    
    body{
      background-image: url('{{asset('app_assets/dist/img/uabcs-2.jpg')}}')!important;
      background-size: cover!important;
    }

    body h1{
      font-family: Akronim;
      color: white;
    }

  </style>
</head>

<body class="hold-transition login-page">

    <div class="register-box">
        <div class="login-logo">
            <a href="{{ route('login') }}"><h1>Extemporáneos</h1></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrarme</p>
                <form method="POST" action="{{ route('registroUsuarios') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="num_control" type="number" class="form-control" name="num_control" placeholder="Número de Control" required  autofocus>          
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-tasks"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre(s)" required  autofocus>          
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" placeholder="Apellido Paterno" required  autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno" required  autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Correo" required  autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required  autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">

                        <select class="form-control" required name="study_plan_id">
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
                        {{ __('Registrarme') }}
                    </button>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</body>

       


