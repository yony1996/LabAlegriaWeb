<div class="card">
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
                            <th>Estado</th>
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
                                    <label class="badge badge-success  badge-pill">{{ $app->status }}</label>
                                </td>
                                <td>

                                    <form action="" method="POST" class="d-inline-block">
                                        @csrf

                                        <button class="btn btn-sm btn-outline-success" type="submit"
                                            data-toggle="tooltip" title="Confirmar Cita">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </form>


                                    <form action="" method="POST" class="d-inline-block">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-danger" type="submit"
                                            data-toggle="tooltip" title="Cancelar Cita">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>

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
        <div class="card-body">
            {{$appPend->links()}}
        </div>


    </div>
</div>