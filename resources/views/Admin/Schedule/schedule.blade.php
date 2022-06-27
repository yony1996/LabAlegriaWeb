@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
    <form action="{{ route('schedule.store') }}" method="POST">
        @csrf
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="mb-0">Gestionar Horario</h3>
                    </div>

                    <div class="col text-right">
                        <button type="submit" class="btn btn-sm btn-success">Guardar Cambios</button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Día</th>
                            <th>Activo</th>
                            <th>Apertura</th>
                            <th>Cierre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workDays as $key => $workDay)
                            <tr>
                                <th>{{ $days[$key] }}</th>
                                <td>
                                    <label class="switch">
                                        <input type="checkbox" name="active[]" value="{{ $key }}"
                                            @if ($workDay->active) checked @endif>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="start[]">
                                            @for ($i = 7; $i <= 12; ++$i)
                                                <option value="{{ ($i < 10 ? '0' : '') . $i }}:00"
                                                    @if ($i . ':00 AM' == $workDay->start) selected @endif>
                                                    {{ $i }}:00 AM</option>
                                                <option value="{{ ($i < 10 ? '0' : '') . $i }}:30"
                                                    @if ($i . ':30 AM' == $workDay->start) selected @endif>
                                                    {{ $i }}:30 AM</option>
                                            @endfor
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" name="end[]">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i + 12 }}:00"
                                                    @if ($i . ':00 PM' == $workDay->end) selected @endif>
                                                    {{ $i }}:00 PM
                                                </option>
                                                <option value="{{ $i + 12 }}:30"
                                                    @if ($i . ':30 PM' == $workDay->end) selected @endif>
                                                    {{ $i }}:30 PM
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </form>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if (session('notification'))
        <script>
            toastr.success('{{ session('notification') }}');
        </script>
    @endif

    @if (session('errors'))
        <script>
            toastr.warning('Los cambios se han guardado pero tener en cuenta que: {{ session('errors') }}');
        </script>
    @endif
@endsection
