<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}" defer></script>
    <script src="{{ asset('js/core/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/core/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/arrive.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}" defer></script>
    <script src="{{ asset('js/plugins/bootstrap-selectpicker.js') }}" defer></script>
    <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}" defer></script>
    <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}" defer></script>
    <script src="{{ asset('js/plugins/chartist.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/fullcalendar.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jasny-bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jquery.bootstrap-wizard.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jquery.tagsinput.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jquery.validate.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/jquery-jvectormap.js') }}" defer></script>
    <script src="{{ asset('js/plugins/moment.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/nouislider.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/plugins/sweetalert2.js') }}" defer></script>
    <script src="{{ asset('js/material-dashboard.js') }}" defer></script>
    <script src="{{ asset('js/material-dashboard.min.js') }}" defer></script>
    <script src="{{ asset('demo/demo.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet">
    <link href="{{ asset('css/material-dashboard.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Desafio
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</html>
