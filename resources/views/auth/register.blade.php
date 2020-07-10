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
  <!--SweetAlert CDN-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('app_assets/img/favicon.ico')}}">

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

<body class="row m-0 justify-content-center align-items-center vh-100">

    <div class="register-box" id="app">
        
        <!--Componente Registro de alumnos con vue-->
        <registro-alumnos />
        
    </div>
    <!-- /.register-box -->

    <script src="{{asset('js/app.js')}}"></script> 

</body>

       


