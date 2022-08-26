@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Editar Usuario</h4>
            <form id="form" method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group row">
                    <div class="col">
                        <label>Nombre</label>
                        <div class="input-group">

                            <input type="text" name="name"
                                class="form-control  @error('name') invalid @enderror form-control-lg"
                                style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');"
                                value="{{ old('name', $user->name) }}"placeholder="Nombre">

                        </div>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Apellido</label>
                        <div class="input-group">

                            <input type="text" name="last_name" class="form-control form-control-lg"
                            style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');"
                                placeholder="Apellido" value="{{ old('last_name', $user->last_name) }}">

                        </div>
                        @error('last_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>Edad</label>
                        <div class="input-group">
                            <input type="text" name="age" class="form-control form-control-lg"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="2"
                                value="{{ old('age', $user->age) }}"placeholder="Edad">

                        </div>
                        @error('age')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Sexo</label>
                        <select class="form-control" name="gender">
                            <option>--SELECCIONE UNA OPCION--</option>
                            <option {{ old('gender', $user->gender) == 'F' ? 'selected' : '' }} value="F">Femenino</option>
                            <option {{ old('gender', $user->gender) == 'M' ? 'selected' : '' }} value="M">Masculino</option>
                        </select>
                        @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>Cédula</label>
                        <div class="input-group">
                            <input type="text" name="nui" id="nui" class="form-control form-control-lg" placeholder="Cédula"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" minlength="10"
                                value="{{ old('nui', $user->nui) }}">
                        </div>
                        <small class="text-danger" id="salida"></small>
                    </div>
                    <div class="col">
                        <label>Teléfono</label>
                        <div class="input-group">
                            <input type="text" name="phone" class="form-control form-control-lg"
                            oninput="this.value = this.value.replace(/[^0-9]/g,'').replace(/(\..*?)\..*/g, '$1');" maxlength="10"
                                value="{{ old('phone', $user->phone) }}" placeholder="Celular">
                        </div>
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>Correo</label>
                        <div class="input-group">
                            <input type="email" name="email"class="form-control form-control-lg"
                                value="{{ old('email', $user->email) }}" autocomplete="false" placeholder="Correo">
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Contraseña</label>
                        <div class="input-group">
                            <input type="password" name="password"class="form-control form-control-lg" autocomplete="false"
                                placeholder="Contraseña">
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="save-data">Actualizar</button>
                </div>
            </form>
        </div>
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
                    document.getElementById("save-data").disabled = false;
                } else {
                    //alert("Cedula Inválida");
                    document.getElementById("salida").innerHTML = ("Cedula Inválida");
                    document.getElementById("save-data").disabled = true;
                }
            }
        });
    </script>
@endsection
