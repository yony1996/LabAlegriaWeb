@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Editar Examen</h4>
            <form id="form" action="{{ route('exam.update', $exam->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="exampleInputName1">Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $exam->name) }}" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Descipcion</label>
                    <input type="text" name="description" class="form-control"
                        value="{{ old('description', $exam->description) }}" style="text-transform: uppercase;" oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');">
                    @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="save-data">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
