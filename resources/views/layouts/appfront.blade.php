<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Club') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('icons/9.png') }}">

         <!-- Scripts -->
         <link href="{{ asset('bootstrap-5.2.2-dist/js/bootstrap.min.js') }}" rel="stylesheet">
 
         {{-- Styles --}}
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link href="{{ asset('bootstrap-5.2.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <!-- animate -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <script type="text/javascript">
        function mostrarPassword(){
                var cambio = document.getElementById("txtPassword");
                if(cambio.type == "password"){
                    cambio.type = "text";
                    $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
                }else{
                    cambio.type = "password";
                    $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
                }
            } 
            
            $(document).ready(function () {
            //CheckBox mostrar contraseña
            $('#ShowPassword').click(function () {
                $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
            });
        });
    </script>
 
</head>
<style>

* {
  box-sizing: border-box;
}
body {
  margin: 0;
  background: #000;
  background-size: cover;
}
video { 
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
div#fashion {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
header {
  position: fixed;
  width: 100%;
  text-align: center;
  color: white;
  transition: .4s;
}
header:hover {
  background: rgba(255,255,255,0.8);
  color: #000;
}
h1 {
  font-family: Moderne Sans, sans-serif;
  text-align: center;
  font-size: 2rem;
  width: 100%;
  letter-spacing: .5rem;
}
nav a {
  text-decoration: none;
  color: inherit;
  padding: 1rem;
}
h2 { 
  font-family: Century Schoolbook, Century Schoolbook L, Georgia, serif;
  font-size: 8vmin;
  text-align: center;
  margin: 2rem 3rem 0;
  mix-blend-mode: overlay;
  color: #fff;
  font-weight: 100;
}
</style>

<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md ">{{-- navbar-light bg-white shadow-sm --}}
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'FrincreRP') }}
                </a> --}}
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-none d-md-block" href="#"> | </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
</html>
