@extends('layouts.appfront')

@section('content')
<video poster="{{ asset('images/fondo.png') }}" playsinline autoplay muted loop>
    <source src="{{ asset('video/2.mp4') }}" type="video/webm">
    <source src="{{ asset('video/2.mp4') }}" type="video/mp4">
</video>

<div>
    <div class="login-page" >
        <div class="form rounded__basic" >
            <div class="login">
                <div class="login-header animate__animated animate__flip">
                    <img src="{{ asset('icons/9.png') }}" class="size__icon animate__animated animate__flip" alt="icon login">
                </div>
                <h5 class="fw-light">Resgistro</h5>
            </div>
            <form method="POST" action="{{ route('register') }}" >
                @csrf
                <div class="bloque__1 mb-4">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <input id="name" type="text" class="rounded__basic @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="nombre de usuario" autofocus>
            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input id="email" type="email" class="rounded__basic  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="correo electronico" autocomplete="email">
            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <input id="password" type="password" class="rounded__basic @error('password') is-invalid @enderror" name="password" required placeholder="contraseña" autocomplete="new-password">
        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="rounded__basic" name="password_confirmation" placeholder="confirmar contraseña" required autocomplete="new-password">
                        </div>
                    </div>      
                </div>

                <div class="bloque__2 mb-2">                
                    {{-- Inicio Btn login --}}
                        <button type="submit" class="push rounded__basic push__button mb-3">
                            {{ __('Registrar') }}
                        </button>
                    {{-- Fin Btn login --}}   
                    @if (Route::has('login'))
                        <a class="nav-link text-primary" href="{{ route('login') }}">{{ __('Inicio de sesion') }}</a>
                    @endif  
                </div>
            </form>

        </div>
    </div>

</div>
@endsection
