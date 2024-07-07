@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 " id="cuerpo">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-body text-center">
                            <img src="{{ asset('img/Logo57.png') }}" alt="logo" class="img-fluid
                            rounded-circle" style="width: 100px; height: 100px;">
                            <h3 class="card-title text-center text-white pt-2">Iniciar Sesión</h3>
                            <input id="email" placeholder="Correo" type="email"
                                class="form-control @error('email') is-invalid @enderror my-2" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ 'No existe este usuario.' }}</strong>
                                </span>
                            @enderror


                            <input id="password" placeholder="Contraseña" type="password"
                                class="form-control @error('password') is-invalid @enderror my-2" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ 'Contraseña incorrecta' }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-outline-light my-2">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    body {
        background-image: linear-gradient(#994d1c, #6b240c);
    }

    #cuerpo {
        background-color: #6b240c;
        margin-top: 25%;
        margin-bottom: 25%
    }
</style>
