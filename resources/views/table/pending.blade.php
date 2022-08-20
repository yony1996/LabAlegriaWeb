<div class="card shadow">
    <div class="card-body">
        <h4 class="card-title">Turnos Pendientes</h4>
        <div class="table-responsive">
            @if (count($appPend) >= 1)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Paciente</th>
                            <th>Examen</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appPend as $app)
                            <tr>

                                <td>{{ $app->user->name }} {{ $app->user->last_name }}</td>
                                <td>{{ $app->exam->name }}</td>
                                <td>{{ $app->scheduled_date }}</td>
                                <td>{{ $app->scheduled_time }}</td>
                                <td>

                                    <button class="btn btn-sm btn-outline-success" id="atendetAppoiment"
                                        data-id="{{ $app->id }}" type="submit" data-toggle="tooltip"
                                        title="Turno atendido">
                                        <i class="fa fa-check"></i>
                                    </button>



                                    <button class="btn btn-sm btn-outline-danger" id="cancelAppoiment"
                                        data-id="{{ $app->id }}" type="submit" data-toggle="tooltip"
                                        title="Turno cancelado">
                                        <i class="fa fa-times"></i>
                                    </button>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="col-md-12 text-center">
                    <h1>No existen turnos</h1>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="card-body">
    {{ $appPend->links() }}
</div>
