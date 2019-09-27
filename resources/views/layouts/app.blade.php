<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pocket Book - @yield('title')</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a6601da356.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

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
                <a href="{{URL::to('/home')}}"><img src="{{ asset('logo.svg') }}" width="50" alt="Logo"></a>
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
                    <li class="nav-item">About</li>
                    <li class="nav-item">Contact</li>
                    <li class="nav-item">Help Center</li>

                    @guest
                    {{-- @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/')}}">{{ __('Register') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    {{-- @endif --}}

                    @else
                    @impersonate()
                    <li class="nav-item">
                        <a href="{{ route('admin.impersonate.destroy') }}">Stop impersonate</a>
                    </li>
                    @endimpersonate
                </ul>
                <div class="dropdown pull-right" aria-labelledby="navbarDropdown">
                    <button class="btn dropdown-toggle" type="button" style="margin:0" data-toggle="dropdown"><i
                            class="far fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span></button>
                    <ul class="dropdown-menu user_menu">
                        <li><a class="dropdown-item" href="#"> {{ __('Profile') }} </a></li>
                        <li><a class="dropdown-item" href="#"> {{ __('Help') }} </a></li>
                        @if (auth()->check())
                        @if (auth()->user()->isAdmin())
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}">Manage Users</a>
                        </li>
                        @else
                        Hello standard user
                        @endif
                        @endif


                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                @endguest
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>
