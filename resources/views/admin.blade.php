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
                                    <h6 class="mb-0">{{ $hora }}</h6>
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
                                    <h6 class="mb-0">{{ $users }}</h6>
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
                                <h6 class="mb-0">{{ $exams }}</h6>
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
                                <h6 class="mb-0">{{ $results }}</h6>
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
    <div class="row">
        <div class="col-md-12 mt-4">

            <div class="card">
                <div class="card-header">
                    <h1>Reporte: Frecuencia de turnos</h1>

                </div>
                {{--   @if ($counts >= 0)
                    <div class="card-body table-responsive">
                        <div id="container">

                        </div>
                    </div>
                @else
                    <div class="alert alert-primary m-4" role="alert" style="font-size: 20px">
                        No exiten turnos para mostrar
                    </div>
                @endif --}}

            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        Highcharts.setOptions({
            lang: {
                loading: 'Cargando...',
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                ],
                weekdays: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes',
                    'Sábado'
                ],
                shortMonths: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep',
                    'Oct', 'Nov', 'Dic'
                ],
                exportButtonTitle: "Exportar",
                printButtonTitle: "Importar",
                rangeSelectorFrom: "Desde",
                rangeSelectorTo: "Hasta",
                rangeSelectorZoom: "Período",
                downloadPNG: 'Descargar imagen PNG',
                downloadJPEG: 'Descargar imagen JPEG',
                downloadPDF: 'Descargar imagen PDF',
                downloadSVG: 'Descargar imagen SVG',
                printChart: 'Imprimir',
                resetZoom: 'Reiniciar zoom',
                resetZoomTitle: 'Reiniciar zoom',
                thousandsSep: ",",
                decimalPoint: '.'
            }
        });
        Highcharts.chart('container', {

            chart: {
                type: 'line'
            },
            title: {
                text: 'Turnos agendados mensualmente'
            },
            xAxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de turnos'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Turnos Registrados',
                data: @json($app),
                color: '#164b6d'
            }]
        });
    </script>
@endsection
