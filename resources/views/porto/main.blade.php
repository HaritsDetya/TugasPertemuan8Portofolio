<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>main</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=League Spartan:wght@400;500;600&display=swap"/>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <style>
        body{
            background-color: #0F0F0F;
            color: #FFFFFF;
        }
        .navbar{
            background-color: rgba(35, 45, 63, 0.5);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{URL('/')}}" class="navbar-brand text-light">Harits</a>
            <button class="navbar-toggler" type="button" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
             aria-expanded="false" aria-label="Togle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item">
                        <a href="" class="nav-link"></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="nav-link text-light {{(request()->is('login')) ? 'active':''}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('register')}}" class="nav-link text-light {{(request()->is('register')) ? 'active':''}}">Register</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a href="#about" class="nav-link text-light">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skills" class="nav-link text-light">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="#studies" class="nav-link text-light">Studies</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link text-light">Contact</a>
                        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black link-underline link-underline-opacity-0 mx-auto p-2" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
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
    <div>
        @yield('content')
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>