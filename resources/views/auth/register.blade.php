@extends('layouts.loginBase')
{{-- @section('content')
    <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
            <img src="{{ asset('dist/images/logo2.png') }}" alt="logo">
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
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <div class="input-group">

                    <input type="text" name="last_name" class="form-control form-control-lg" placeholder="Apellido"
                        value="{{ old('last_name') }}">

                </div>
                @error('last_name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Edad</label>
                <div class="input-group">
                    <input type="text" name="age" class="form-control form-control-lg"
                        value="{{ old('age') }}"placeholder="Edad">

                </div>
                @error('age')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Sexo</label>
                <select class="form-control" name="gender">
                    <option>--SELECCIONE UNA OPCION--</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                @error('gender')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Cédula</label>
                <div class="input-group">
                    <input type="text" name="nui" class="form-control form-control-lg" id="nui"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"
                        autocomplete="off" maxlength="10" minlength="10" placeholder="Cédula" value="{{ old('nui') }}">
                </div>
                <small class="text-danger" id="salida"></small>
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <div class="input-group">
                    <input type="text" name="phone" class="form-control form-control-lg" value="{{ old('phone') }}"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"
                        placeholder="Celular">
                </div>
                @error('phone')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Correo</label>
                <div class="input-group">
                    <input type="email" name="email"class="form-control form-control-lg" value="{{ old('email') }}"
                        autocomplete="false" placeholder="Correo">
                </div>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Contraseña">
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary" id="register">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="text-center mt-4 font-weight-light">
                Ya tienes una cuenta? <a href="{{ route('login') }}" class="text-primary">Ingresar</a>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js" type="text/javascript"></script>
    <script>
        $("#nui").keyup(function() {
            var cad = document.getElementById("nui").value.trim();
            var total = 0;
            var longitud = cad.length;
            var longcheck = longitud - 1;
            if (cad !== "" && longitud === 10) {
                for (i = 0; i < longcheck; i++) {
                    if (i % 2 === 0) {
                        var aux = cad.charAt(i) * 2;
                        if (aux > 9) aux -= 9;
                        total += aux;
                    } else {
                        total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
                    }
                }
                total = total % 10 ? 10 - total % 10 : 0;
                if (cad.charAt(longitud - 1) == total) {
                    //alert("Cedula Válida");
                    document.getElementById("salida").innerHTML = ("");
                    document.getElementById("register").disabled = false;
                } else {
                    //alert("Cedula Inválida");
                    document.getElementById("salida").innerHTML = ("Cedula Inválida");
                    document.getElementById("register").disabled = true;
                }
            }
        });
    </script>
@endsection --}}
@section('content')
    <div class="container mt-8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5 d-flex justify-content-center">
                        <img src="{{ asset('dist/images/logo2.png') }}" alt="laboratorio alegria"
                            style="width: 200px; height:80px;">
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form class="pt-3" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input type="text" name="name"
                                        class="form-control  @error('name') invalid @enderror form-control-lg"
                                        value="{{ old('name') }}"placeholder="Nombre">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input type="email" name="email"class="form-control form-control-lg"
                                        value="{{ old('email') }}" autocomplete="false" placeholder="Correo">
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
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Contraseña">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">I agree with the <a href="#!">Privacy
                                                    Policy</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" id="register">
                                    Crear Cuenta
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
