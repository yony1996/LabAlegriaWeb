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
                                value="{{ old('age', $user->age) }}"placeholder="Edad">

                        </div>
                        @error('age')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Sexo</label>
                        <select class="form-control" name="scheduled_time" id="hours">
                            <option>--SELECCIONE UNA OPCION--</option>
                            <option  value="F">Femenino</option>
                            <option  value="M">Masculino</option>
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
                            <input type="text" name="nui" class="form-control form-control-lg" placeholder="Cédula"
                                value="{{ old('nui', $user->nui) }}">
                        </div>
                        @error('nui')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col">
                        <label>Teléfono</label>
                        <div class="input-group">
                            <input type="text" name="phone" class="form-control form-control-lg"
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
                    <button type="submit" class="btn btn-success" id="save-data">Registrar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
