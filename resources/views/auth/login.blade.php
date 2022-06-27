@extends('layouts.loginAdd')

@section('content')
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
            <img src="{{ asset('dist/lab/images/logo.svg') }}" alt="logo">
        </div>
        <h4>Welcome back!</h4>
        <h6 class="font-weight-light">Happy to see you again!</h6>
        <form class="pt-3" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                            <i class="fa fa-user text-primary"></i>
                        </span>
                    </div>
                    <input type="text" name="email"
                        class="form-control form-control-lg border-left-0  @error('email') is-invalid @enderror">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
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
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

            </div>
            <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
            </div>
        </form>
    </div>
@endsection
