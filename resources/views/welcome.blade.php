<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carreras</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                font-size: 12px;
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
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Corriendo
                </div>

                <div class="links">
                    <a href="{{ url('event') }}">Eventos</a>
                    <a href="{{ url('athlete') }}">Atleta</a>
{{--                    <a href="https://laravel-news.com">Atleta</a>
                    <a href="https://nova.laravel.com">Resultados</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
{{--             <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Organizador</th>
                    <th>Deporte</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Inscribirse</th>
                    <th>Ver</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($eventos as $evento)
                      <tr>
                        <td>{{ $evento->organizer->nombre }}</td>
                        <td>{{ $evento->sport->nombre }}</td>
                        <td>{{ $evento->nombre }}</td>
                        <td>{{ $evento->fecha }}</td>
                        <td><button class="btn btn-primary">Inscribirse</button></td>
                        <td><button class="btn btn-primary">Ver</button></td>
                      </tr>
                    @endforeach
                </tbody>
            </table> --}}                
            </div>
        </div>
    </body>
</html>
