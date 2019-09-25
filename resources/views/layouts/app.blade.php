<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pocket Book - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header class="header">
            <nav class="navbar navbar-expand-md">
                <a href="{{URL::to('/')}}"><img src="{{ asset('logo.svg') }}" width="50" alt="Logo"></a>
            </nav>
            <h1>@yield('title')</h1>
        </header>

        <main class="py-4 container">
            @include('partials.alerts')
            @yield('content')
        </main>

         <footer class="footer">
              <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">About</li>
                        <li class="nav-item">Contact</li>
                        <li class="nav-item">Help Center</li>
                        @if (Route::has('login'))
                        <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/')}}">{{ __('Register') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @else
                        {{-- @if(Auth::check() && Auth::user()->is('admin')) --}}
                        {{-- @role('admin') --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}">Manage Users</a>
                        </li>
                        {{-- @endrole --}}


                        @impersonate()
                        <li class="nav-item">
                            <a href="{{ route('admin.impersonate.destroy') }}">Stop impersonate</a>
                        </li>
                        @endimpersonate
                    </ul>
                    <ul class="pull-right">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"> {{ __('Profile') }} </a>
                                <a class="dropdown-item" href="#"> {{ __('Help') }} </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        </ul>
                        @endguest
                    </ul>
                </div>
        </footer>
    </div>
</body>

</html>
