<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pocket Books</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                padding: 0;
                font-family: 'Montserrat', sans-serif;
            }

            body {
                background-image: url('img/bg.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-color: #140e07;
                color: #fff;
            }

            .container {
                max-width: 940px;
            }

            /* Header */
            .header {
                text-align: center;
                margin-bottom: 50px;
            }

            .header .container {
                padding: 30px 0;
            }

            /* Main */
            .main {
                margin: 80px 0;
            }

            .main h1 {
                font-size: 30px;
                margin: 0 0 20px 0;
            }

            /* Form */
            form input.form-control {
                border: 0px;
                border-radius: 0px;
            }

            .main .btn {
                margin-top: 30px;
                color: #fff;
                background: rgba(0,240,190,0.25);
                border: 0px;
                border-radius: 0px;
            }

            /* Footer */
            .footer .container {
                padding: 20px 0;
                border-top: 1px solid #e5e5e5;
            }

            .footer ul {
                list-style: none;
                padding: 0 20px;
                margin-bottom: 80px;
            }

            .footer li {
                display: inline;
    padding: 0 10px;
    border-right: 1px solid white;
            }
            .footer li:last-child {
    border-right: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <header class="header">
            <div class="container">

                <img src="img/logo.svg" width="50">
                <h1>Join Pocketbook</h1>
                 @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary">{{ __('Log in') }}
                                            </button></a>

                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}"><button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}</button></a>
                                    @endif
                                @endauth
                            </div>
                            @endif
            </div>
        </header>
        <main class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                         <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-right">{{ __('Full name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                             <div class="form-group">
                                 <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <div class="form-group mb-0">
                          @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                {{-- <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary">{{ __('Log in') }}
                                            </button></a> --}}

                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}"><button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}</button></a>
                                    @endif
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
            <div class="container">
                <ul>
                    <li>About</li>
                    <li>Contact</li>
                    <li>Help Center</li>
                </ul>
            </div>
        </footer>
        {{-- @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
 <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary">{{ __('Log in') }}
                                            </button></a>

                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}"><button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}</button></a>
                                    @endif
                                @endauth
                            </div>
                            @endif --}}
        </div>
    </body>
</html>
