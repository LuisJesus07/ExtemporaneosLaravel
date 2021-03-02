<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar contraseña</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('app_assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('app_assets/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('app_assets/img/favicon.ico')}}">

    <style type="text/css">

        @import url("https://fonts.googleapis.com/css?family=Akronim");

        body{
            background-image: url('{{asset('app_assets/dist/img/uabcs-2.jpg')}}')!important;
            background-size: cover!important;
        }

        body b{
            font-family: Akronim;
            color: white;
        }

    </style>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('welcome') }}"><b>Extemporáneos</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg">¿Olvidaste tu contraseña? Aquí puedes recuperar fácilmente una nueva contraseña. Ingresa el correo con el que te registraste.</p>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block font-weight-bold">Solicitar nueva contraseña</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

                <p class="mt-3 mb-1">
                    <a href="{{'/login'}}">Iniciar Sesión</a>
                </p>
                <p class="mb-0">
                    <a href="{{'/registro'}}" class="text-center">Registrarme</a>
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</body>
</html>


