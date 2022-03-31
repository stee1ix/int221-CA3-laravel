<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <style>
    body {
        display: flex;
        justify-content: center;
    }

    main {
        margin-top: 4rem;
        display: flex;
        justify-content: center;
    }

    nav {
        padding: 2rem;
        background-color: #efefef;
        width: 100vw;
    }

    .navbar-nav {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .login {
        margin-right: 2rem;
    }

    a {
        margin-right: 2rem;
    }

    .logout {
        display: flex;
    }

    .logout a {
        margin-left: 2rem;
    }

    .menu {
        display: flex;
    }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                <div class="menu">
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item login">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                </div>
                <div class="">
                    <a href="{{ route('home.index') }}">Home</a>
                    <a href="{{ route('blogs.index') }}">Blogs</a>
                    <a href="{{ route('home.about') }}">About</a>
                    <a href="{{ route('home.contact') }}">Contact</a>
                </div>

                <li class="nav-item logout">

                    <h4>{{ Auth::user()->name }}</h4>


                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>

                @endguest
            </ul>

        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>