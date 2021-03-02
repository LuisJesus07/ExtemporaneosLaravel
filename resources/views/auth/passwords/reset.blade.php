<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('app_assets/plugins/fontawesome-free/css/all.min.css')}}">

        <title>Recuperar Contraseña</title>
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
      
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">
                             
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>



