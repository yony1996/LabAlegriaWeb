@extends('layouts.app')

@section('content')
    <div class="row">
        @hasanyrole('Bioquimico|Admin')
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-0">Horario</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h6 class="mb-0">Lun - Mar - Mie - Jue - Vie - Sab - Dom</h6>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <i class="fa fa-calendar text-info icon-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-0">Usuarios Registrados</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h6 class="mb-0">150</h6>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <i class="fa fa-users text-info icon-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endhasanyrole

    </div>
    <div class="row">
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-0">Examenes Disponibles</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h6 class="mb-0">6</h6>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <i class="fa fa-flask text-info icon-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-0">Resultados Disponibles</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-inline-block pt-3">
                            <div class="d-md-flex">
                                <h6 class="mb-0">6</h6>
                            </div>
                        </div>
                        <div class="d-inline-block">
                            <i class="fa fa-file-pdf text-info icon-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-0">Turnos</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="row mt-4">
                            <div class="col-md d-block">
                                <label for="">Reservados</label>
                               <div>{{ $resApp }}</div> 
                            </div>
                            <div class="col-md d-block">
                                <label for="">Cancelados</label>
                                <div>{{ $canApp }}</div>
                            </div>
                            <div class="col-md d-block">
                                <label for="">Atendidos</label>
                                <div>{{ $attApp }}</div>
                            </div>
                        </div>

                        <div class="d-inline-block">
                            <i class="fa  fa-check-square text-info icon-lg"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Examenes Realizados en el mes</h4>
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('dist/lab/js/chart.js') }}"></script>
@endsection
