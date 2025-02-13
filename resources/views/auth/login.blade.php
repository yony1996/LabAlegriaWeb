@extends('layouts.loginBase')
@section('content')
    <div class="container mt-8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5 d-flex justify-content-center">
                        <img src="{{ asset('dist/images/logo2.png') }}" alt="laboratorio alegria"
                            style="width: 200px; height:80px;">
                    </div>

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Ingresa tus Credenciales</small>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control"name="email" value="{{ old('email') }}"
                                        placeholder="Correo Electronico" type="email">
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control"name="password" placeholder="Contraseña" type="password">
                                </div>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Recordarme</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">

                        <a href="{{ route('password.request') }}" class="text-light"><small>Olvidaste tu
                                contraseña?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register') }}" class="text-light"><small>Crear cuenta</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @section('content')
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
            <img src="{{asset('dist/images/logo2.png')}}" alt="logo" style="width: 200px; height:100px;">
        </div>
        <h4>Bienvenido</h4>
        @if (session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
        <form class="pt-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail">Correo</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="email"
                        class="form-control form-control-lg border-left-0" value="{{old('email')}}" placeholder="Correo">
                </div>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Contraseña</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-lock text-primary"></i>
                        </span>
                    </div>
                    <input type="password"
                        class="form-control form-control-lg border-left-0"
                        name="password" placeholder="Contraseña">
                </div>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

            </div>
            <div class="text-center mt-4 font-weight-light">
               ¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-primary">Registrate</a>
            </div>
        </form>
    </div>
@endsection --}}
