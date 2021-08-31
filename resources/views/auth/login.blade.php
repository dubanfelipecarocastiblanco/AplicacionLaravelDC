@extends('layouts.logins')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="login-box">
                    <h3 align="center">Iniciar Sesión</h3>
                    <br>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Usuario -->
                        <center>
                            <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail') }}</label>
                        </center>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- Contraseña -->
                        <center>
                            <label for="password" class="col-md-4 col-form-label">{{ __('Contraseña') }}</label>
                        </center>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit" class="btn btn-block" style="background: chartreuse; color: black; ">
                            {{ __('Iniciar Sesion') }}
                        </button>
                        <br>

                        {{--  --}}
                        <a href="">Olvido su contraseña?</a>
                        <br>
                        <a href="{{ route('register') }}">No tiene cuenta?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
