@extends('layouts.logins')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="register-box">
                    <h3 align="center">Registarse</h3>
                    <br>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- Usuario --}}
                        <center>
                            <label for="name" class="col-md-4 col-form-label ">{{ __('Nombre Usuario') }}</label>
                        </center>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{-- E-mail Adress --}}
                        <center>
                            <label for="email" class="col-md-4 col-form-label ">{{ __('E-mail') }}</label>
                        </center>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{-- Password --}}
                        <center>
                            <label for="password" class="col-md-4 col-form-labelt">{{ __('Contraseña') }}</label>
                        </center>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{-- Password Confirm --}}
                        <center>
                            <label for="password-confirm"
                                class="col-md-4 col-form-label ">{{ __('Confirmar Contraseña') }}</label>
                        </center>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">

                        {{--  --}}
                        <button type="submit" class="btn btn-block" style="background: chartreuse; color: black; ">
                            {{ __('Registrarse') }}
                        </button>
                        <br>

                        {{--  --}}
                        <a href="">Olvido su contraseña?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
