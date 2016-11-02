<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
            
    </script>

</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', '') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                     @if(Auth::check())
                     <ul class="nav navbar-nav">
                          @if(Auth::user()->hasRole("digitacion") || Auth::user()->hasRole("superUser"))
                          <li class="dropdown" :class="{'active': ruta=='apertura' || ruta=='cierre'}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JRV<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li :class="{'active': ruta=='apertura'}"><a @click="ruta='apertura'" href="#">Apertura</a></li>
                              <li :class="{'active': ruta=='cierre'}"><a @click="ruta='cierre'" href="#">Cierre</a></li>
                            </ul>
                          </li>
                          {{-- <li :class="{'active': ruta=='procs'}"><a href="#" @click="ruta='procs'">Procuradores</a></li> --}}
                          <li :class="{'active': ruta=='movi'}"><a href="#" @click="ruta='movi'">Plan de Movilización<span class="sr-only">(current)</span></a></li>
                          <li :class="{'active': ruta=='incs'}"><a href="#" @click="ruta='incs'">Incidencias</a></li>
                          @endif
                          @if(Auth::user()->hasRole("monitoreo") || Auth::user()->hasRole("monitoreoNacional") || Auth::user()->hasRole("superUser"))
                          <li class="dropdown" :class="{'active': ruta=='incidencias' || ruta=='estadistico'}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Monitoreo<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li :class="{'active': ruta=='estadistico'}"><a @click="ruta='estadistico'" href="#">Estadistico</a></li>
                                <li :class="{'active': ruta=='incidencias'}"><a @click="ruta='incidencias'" href="#">Incidencias</a></li>
                            </ul>
                          </li>
                          @endif
                    </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Entrar</a></li>
                            {{-- <li><a href="{{ url('/register') }}">Registro</a></li> --}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            {{-- <navegacion></navegacion> --}}
        </nav>
        <home>
            @yield('content')
        </home>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    {{-- <script src="/js/components.js"></script> --}}

</body>
</html>
