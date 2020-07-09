<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('app_assets/plugins/fontawesome-free/css/all.min.css')}}">

        <title>Solicitud de exámenes extemporáneos</title>
        <link rel="stylesheet" href="{{asset('app_assets/dist/css/adminlte.min.css')}}">

        <link rel="icon" type="image/vnd.microsoft.icon" href="{{asset('app_assets/img/favicon.ico')}}">

        <style type="text/css">
            
            body{
                background-image: url('{{asset('app_assets/dist/img/uabcs-2.jpg')}}')!important;
                background-size: cover!important;
            }

            body h1{
                font-family: 'Open Sans', sans-serif;
                font-weight: bold;
                color: #FFF;
            }

            body h2{
                font-size: 1.7em;
                margin-bottom: 1em;
                color: #f8e500;
            }

            body p{
                line-height: 26px;
                margin-bottom: 3em;
                color: #fff;
            }

            i.separar {
                padding-right: 15px;
                color: #fff;
            }
        </style>
       
    </head>
    <body class="row m-0 bg-primary justify-content-center align-items-center vh-100">
      
     <div class="container">
     
        <h1>DEPARTAMENTO ACADÉMICO DE CIENCIAS SOCIALES Y JURÍDICAS</h1>
        <h2>SOLICITUD DE EXÁMENES EXTEMPORÁNEOS</h2>
        <p>Regístrate en la plataforma para realizar tus solicitudes de exámenes extemporáneos, toma en cuenta que por reglamento se tiene derecho a dos exámenes por período, a partir de la tercera solicitud serán sujetas a aprobación.</p>
        <a href="{{'/login'}}" class="btn btn-outline-secondary"><i class="fas fa-sign-in-alt separar"></i></i>Ingresar</a>
        <a href="{{'/registro'}}" class="btn btn-outline-secondary"><i class="fa fa-user-plus separar" aria-hidden="true"></i>
        Registrarme</a>

     </div>
  
    </body>
</html>
