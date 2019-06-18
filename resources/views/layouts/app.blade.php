<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <div class="navFont">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel padding-top: 1px;padding-bottom: 1px;">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}" style="color:#ff33a0;font-size:30px;">
                        <strong>{{ config('app.name', 'Laravel') }}</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item" >
                                    <strong><a class="nav-link" style="color:#ff33a0;font-size:20px;" href="{{ route('login') }}">{{ __('Login') }}</a></strong>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <strong><a class="nav-link" style="color:#ff33a0;font-size:20px;" href="{{ route('register') }}">{{ __('Register') }}</a></strong>
                                </li>
                                @endif
                            @else

                            @if(auth()->user()->is_admin=1)

                            <li>
                                <a class="nav-link" href="/home" style="color:#ff33a0;font-size:20px;">
                                    <strong> Dashboard </strong>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" style="color:#ffffff;font-size:20px;">
                                    |
                                </a>
                            </li>

                            @endif
                                <li>
                                    <a class="nav-link" href="/admin/category" style="color:#ff33a0;font-size:20px;">
                                        <strong> category </strong>
                                    </a>
                                </li>

                                @if(auth()->user()->is_admin==0)
                                <li>
                                    <a class="nav-link" style="color:#ffffff;font-size:20px;">
                                        |
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="/users" style="color:#ff33a0;font-size:20px;">
                                        users
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" style="color:#ffffff;font-size:20px;">
                                        |
                                    </a>
                                </li>
                                @endif

                                <div class="imageAndUsername">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" style="position:relative; padding-left:50px; color:#00ffaa; font-size:20px;display: flex;align-items: center;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <img src="/images/avatars/{{ Auth::user()->avatar }}" style="width=32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%;font-size:25px;display: flex;align-items: center;">
                                            <strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong><span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('profile', ['id' => Auth::user()->id] ) }}" style="font-size:20px;">
                                                profile
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" style="font-size:20px;"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </div>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>