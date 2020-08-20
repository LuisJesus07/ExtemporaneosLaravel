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
                font-family: 'Arial', sans-serif;
                font-weight: bold;
                color: #FFF;
            }

            body h2{
                font-size: 1.7em;
                font-family: 'Arial', sans-serif;
                font-weight: bold;
                margin-bottom: 1em;
                color: #f8e500;
            }

            body p{
                font-family: 'Arial', sans-serif;
                line-height: 26px;
                margin-bottom: 3em;
                color: #fff;
            }

            a.bt-home {
                border: 1px solid #fff;
                border-radius: 10px;
                width: 200px;
                padding: 1em;
                margin: 0 1em;
                display: inline-block;
                color: #fff;
                text-decoration: none;
                background: rgba(0,0,0,.3);
                transition: all linear .3s;
            }

            a.bt-home:hover {
                background: rgba(0,0,0,.7);
                transition: all linear .3s;
                transform: scale(1.1);
            }

            i.separar {
                padding-right: 15px;
                color: #fff;
            }
        </style>
       
    </head>
    <body class="row m-0 justify-content-center align-items-center vh-100">
      
     <div class="container mb-5">
     
        <h1>DEPARTAMENTO ACADÉMICO DE CIENCIAS SOCIALES Y JURÍDICAS</h1>
        <h2>SOLICITUD DE EXÁMENES EXTEMPORÁNEOS</h2>
        <p class="">Regístrate en la plataforma para realizar tus solicitudes de exámenes extemporáneos, toma en cuenta que por reglamento se tiene derecho a dos exámenes por período, a partir de la tercera solicitud serán sujetas a aprobación.</p>
        <a href="{{'/login'}}" class="bt-home"><i class="fas fa-sign-in-alt separar"></i></i>Ingresar</a>
        <a href="{{'/registro'}}" class="bt-home"><i class="fa fa-user-plus separar" aria-hidden="true"></i>
        Registrarme</a>

     </div>
  
    </body>
</html>
