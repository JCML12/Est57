<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="title" content="Escuela Secundaria Técnica 57">
    <meta name="description" content="Página oficial de la escuela secundaria técnica">
    <meta name="keywords"
        content="Escuela, escuela, secundaria, Secundaria, est57, EST57, Est57, educación, 57, Técnica, tecnica, Escuela Secundaria Técnica 57, escuela secundaria técnica 57">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EST#57</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('img/Logo57.png') }}" />


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a id="logo" class="navbar-brand" href="inicio">
                    <strong> EST#57 </strong>
                </a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Botones Navegación-->
                        <li>
                            <strong> <a class="btn  btn-light m-1" href="/inicio">Inicio</a> </strong>
                        </li>
                        <li>
                            <a class="btn btn-light m-1 " href="/nosotros">Nosotros</a>
                        </li>
                        <li>
                            <a class="btn  btn-light m-1" href="/documentos">Documentos</a>
                        </li>
                        <li>
                            <a class="btn  btn-light m-1" href="/eventos">Eventos</a>
                        </li>
                        <li>
                            <a class="btn  btn-light m-1" href="/contacto">Contacto</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">


                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown text-light">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<style>
    body {
        background-color: #6B240C;
        color: white;
    }


    #logo {
        color: white;
        font-size: 35px;
        margin-top: 5px;
    }
</style>

</html>
