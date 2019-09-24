<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pocket Book @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="flex-center position-ref full-height">
        <header class="header">
            <nav class="navbar navbar-expand-md">
                <a href="{{URL::to('/')}}"><img src="{{ asset('logo.svg') }}" width="50" alt="Logo"></a>
            </nav>
            <h1>Join Pocketbook</h1>
        </header>
        <main class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-right">{{ __('Full name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"
                                    class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm"
                                    class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <div class="form-group mb-0">
                                @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                    @else

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Register') }}</button>
                                    </a>
                                    @endif

                                    Already have an account?
                                    <a href="{{ route('login') }}">{{ __('Log in') }} </a>

                                    @endauth
                                </div>
                                @endif

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
              <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">About</li>
                        <li class="nav-item">Contact</li>
                        <li class="nav-item">Help Center</li>
                    </ul>
                </div>
        </footer>
    </div>
</body>

</html>
