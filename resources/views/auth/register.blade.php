@extends('layouts.loginAdd')
@section('content')
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
            <img src="#" alt="logo">
        </div>
        <h4>Registrate</h4>
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="pt-3" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="name"
                        class="form-control form-control-lg border-left-0 @error('name') is-invalid @enderror"
                        placeholder="Username">

                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="last_name"
                        class="form-control form-control-lg border-left-0 @error('last_name') is-invalid @enderror"
                        placeholder="Username">

                </div>
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Edad</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="age"
                        class="form-control form-control-lg border-left-0 @error('age') is-invalid @enderror"
                        placeholder="Username">

                </div>
                @error('age')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Direccion</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="address"
                        class="form-control form-control-lg border-left-0 @error('address') is-invalid @enderror"
                        placeholder="Username">

                </div>
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Cédula</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="nui"
                        class="form-control form-control-lg border-left-0 @error('nui') is-invalid @enderror"
                        placeholder="Username">
                </div>
                @error('nui')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Celular</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="phone"
                        class="form-control form-control-lg border-left-0 @error('phone') is-invalid @enderror"
                        placeholder="Username">
                </div>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="far fa-envelope-open text-primary"></i>
                        </span>
                    </div>
                    <input type="email"
                        name="email"class="form-control form-control-lg border-left-0 @error('nui') is-invalid @enderror"
                        placeholder="Email">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-lock text-primary"></i>
                        </span>
                    </div>
                    <input type="password"
                        class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror"
                        name="password" placeholder="Password">
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
                Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
            </div>
        </form>
    </div>
@endsection
