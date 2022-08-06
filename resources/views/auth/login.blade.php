@extends('layouts.loginAdd')

@section('content')
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
@endsection
