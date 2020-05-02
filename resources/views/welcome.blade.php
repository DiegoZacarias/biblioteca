<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #333333;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          

            @if (Route::has('login'))
                <div class="top-right links">
                      
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
            <div class="content">
                <div class="title m-b-md">
                    Biblioteca

                    <br>
                </div>
                    <p><span style="font-weight: bold;"> IMPORTANTE:</span> Si es la primera vez que inicias el sistema, no olvides importar la base de datos que se encuentra en la raiz del proyecto <br> o si tenes laravel instalado hacer directamente:<span style="font-weight: bold;"> php artisan migrate:refresh --seed </span></p>
                    
                    <p>La conexion a la base de datos se hace en el archivo <span style="font-weight: bold">.env</span> que se encuentra en la raiz del proyecto: </p>

                        <figure><img src="assets/env.png"></figure>



                    <p>Necesitas iniciar sesion para entrar al crud. <span style="font-weight: bold;">Podes directamente crear una cuenta </span><br>o si utilizaste el scrip <span style="font-weight: bold;">biblioteca.sql</span>, podes ingresar con: </p>
                    <p><span style="font-weight: bold;">Email: </span>admin@admin.com</p>
                    <p><span style="font-weight: bold;">Contraseña: </span>123456789</p>

                    <h3>El repositorio de este proyecto: </h3> <p><a href="https://github.com/DiegoZacarias/biblioteca" style="color: white;">https://github.com/DiegoZacarias/biblioteca</a></p>

            </div>
        </div>
    </body>
</html>
