<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kampai</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/estiloWelcome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('APP_NAME', 'Kampai') }}
                </a>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="acceder"><span class="glyphicon glyphicon-user"></span>Acceder</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>


            <div class="content">
               <div id="brindis">
                <div class="title">
                    Encuentra lo que quieres comer y beber!
                </div>
                <div class="buscador">
                    <button href="sidebar" class="glyphicon glyphicon-th-list"></button><input type="search" placeholder="Search...">
                </div>

               </div>
                @include('map.map')
                <div id="info">
                    <div id="pnaizq">
                        <i class="fa fa-beer fa-2x" aria-hidden="true"></i>
                        <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i>
                        <div class="clearfix"></div>
                        <h2>¿Tienes sed?¿Tienes hambre?</h2>
                        <h4><i>Kampai compara entre miles de bares y restaurantes para encontrar lo que buscas</i></h4>
                        <h2>3 simples pasos para usar nuestra app</h2>

                        <h4><i>1-Registrate si no estas registrado</i></h4>
                        <h4><i>2-Rellena nuestro formulario</i></h4>
                        <h4><i>3-Elige entre los diferentes sitios del mapa</i></h4>

                    </div>
                    <div id="pnadr">
                        <div id="cuadrin">
                            <div id="abu"></div>
                            <h2>Rapido y facil de usar!</h2>
                            <h4>-Abuela Carmen premiun user</h4>
                        </div>
                    </div>

                </div>
            </div>
            <div id="foot">
                <a href="http://www.youtube.com" target="_blank" class="youtube"><span class="fa fa-youtube"></span> </a>
                <a href="http://www.facebook.com" target="_blank" class="facebook"><span class="fa fa-facebook"></span> </a>
                <a href="http://twitter.com" target="_blank" class="twitter"><span class="fa fa-twitter"></span> </a>
                <a href="http://www.instagram.com" target="_blank" class="instagram"><span class="fa fa-instagram"></span> </a>
                <p>Todos los derechos reservados equipo Ninja Purpura 2017&copy;</p>
            </div>

    </body>
</html>
