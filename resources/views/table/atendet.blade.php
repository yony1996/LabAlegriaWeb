<div class="card">
    <div class="card-body">
        <h4 class="card-title">Turnos Atendidos</h4>
        <div class="table-responsive">
            @if (count($appAtend)>=1)    
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
                    @foreach ($appAtend as $app)
                        <tr>

                            <td>{{ $app->user->name }} {{ $app->user->last_name }}</td>
                            <td>{{ $app->exam->name }}</td>
                            <td>{{ $app->scheduled_date }}</td>
                            <td>{{ $app->scheduled_time }}</td>
                            <td>
                                <label class="badge badge-success  badge-pill">{{ $app->status }}</label>
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
