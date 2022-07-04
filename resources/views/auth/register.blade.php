@extends('layouts.loginAdd')
@section('content')
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
            <img src="{{asset('dist/images/logo2.png')}}" alt="logo">
        </div>
        <h4>Registrate</h4>
        <form class="pt-3" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <div class="input-group">
                  
                    <input type="text" name="name"
                        class="form-control  @error('name') invalid @enderror form-control-lg"
                        value="{{ old('name') }}"placeholder="Nombre">

                </div>
                @error('name') <small class="text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <div class="input-group">
                   
                    <input type="text" name="last_name"
                        class="form-control form-control-lg"
                        placeholder="Apellido"
                        value="{{old('last_name')}}"
                        >

                </div>
                @error('last_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Edad</label>
                <div class="input-group">
                    <input type="text" name="age"
                        class="form-control form-control-lg"
                        value="{{old('age')}}"placeholder="Edad">

                </div>
                @error('age')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Direccion</label>
                <div class="input-group">
                    <input type="text" name="address"
                        class="form-control form-control-lg"
                        value="{{old('address')}}"
                        placeholder="Direccion">

                </div>
                @error('address')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Cédula</label>
                <div class="input-group">
                    <input type="text" name="nui"
                        class="form-control form-control-lg"
                        placeholder="Cédula" value="{{old('nui')}}">
                </div>
                @error('nui')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <div class="input-group">
                    <input type="text" name="phone"
                        class="form-control form-control-lg"
                        value="{{old('phone')}}"
                        placeholder="Celular">
                </div>
                @error('phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Correo</label>
                <div class="input-group">
                    <input type="email"
                        name="email"class="form-control form-control-lg"
                        value="{{old('email')}}"
                        autocomplete="false"
                        placeholder="Correo">
                </div>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <div class="input-group">
                    <input type="password"
                        class="form-control form-control-lg"
                        name="password" placeholder="Contraseña">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="text-center mt-4 font-weight-light">
                Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-primary">Ingresar</a>
            </div>
        </form>
    </div>
@endsection
