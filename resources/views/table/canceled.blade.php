<div class="card">
    <div class="card-body">
        <h4 class="card-title">Turnos Cancelados</h4>
        <div class="table-responsive">
            @if (count($appCanc)>=1)
            <table class="table">
                <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Examen</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appCanc as $app)
                        <tr>

                            <td>{{ $app->user->name }} {{ $app->user->last_name }}</td>
                            <td>{{ $app->exam->name }}</td>
                            <td>{{ $app->scheduled_date }}</td>
                            <td>{{ $app->scheduled_time }}</td>
                            <td>
                                <label class="badge badge-danger  badge-pill">{{ $app->status }}</label>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="col-md-12 text-center">
                <h1>No exiten turnos</h1>
            </div>
            @endif
            <div class="card-body">
                {{ $appCanc->links() }}
            </div>
        </div>
    </div>
</div>
