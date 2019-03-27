<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'TechWeek') }}</title>
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/pages/welcome.css') }}" rel="stylesheet">
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
                            <a href="{{ route('register') }}">Registrar-se</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TECHWEEK
                </div>
                <div class="links">
                    <a href="/speeches">Palestras</a>
                    <a href="/courses">Mini Cursos</a>
                    <a href="/speakers">Palestrantes</a>
                    <a href="/certificate">Certificado</a>
                </div>
            </div>
        </div>
        <footer>
            <a href="#"">Autores</a>
        </footer>
    </body>
</html>