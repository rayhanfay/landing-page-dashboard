<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Syahan.my.id</title>

    <!-- Custom CSS -->
    <link href="{{ asset('img/styles.css') }}" rel="stylesheet">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #ffffff;
            padding: 1rem 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: flex;
            top: 0;
            z-index: 1000;
        }

        .nav-link {
            color: #343a40;
            margin-right: 1rem;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-sizing: border-box;
        }

        .blue-shape {
            height: 100%;
            width: 100%;
            background: url('{{ asset('img/bg-login-page.svg') }}') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            box-sizing: border-box;
        }

        .blue-shape img {
            max-width: 80%;
            border-radius: 50%;
            border: 5px solid white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 768px) {
            .blue-shape {
                width: 50%;
            }

            .info-box-container {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn-box" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            <!--{{-- @if (Route::has('register'))-->
                            <!--    <li class="nav-item">-->
                            <!--        <a class="nav-link btn-box" href="{{ route('register') }}">{{ __('Register') }}</a>-->
                            <!--    </li>-->
                            <!--@endif --}}-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            <div class="main-content">
                <div class="blue-shape">
                    <img src="{{ asset('img/syahan.png') }}" alt="Welcome Image">
                </div>
                <div class="info-box-container">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>


</body>

</html>
