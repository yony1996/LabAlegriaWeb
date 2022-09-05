@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-4">

            <div class="card">
                <div class="card-header">
                    <h1>Reporte: Frecuencia de turnos</h1>

                </div>
                @if ($counts>0)
                    <div class="card-body table-responsive">
                        <div id="container1">

                        </div>
                    </div>
                @else
                    <div class="alert alert-primary m-4" role="alert" style="font-size: 20px">
                        No exiten turnos para mostrar
                    </div>
                @endif
               

            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-4">

            <div class="card">
                <div class="card-header">
                    <h1>Reporte: Resultados por mes</h1>

                </div>
                @if ($results > 0)
                    <div class="card-body table-responsive">
                        <div id="container2">

                        </div>
                    </div>
                @else
                    <div class="alert alert-primary m-4" role="alert" style="font-size: 20px">
                        No exiten resultados para mostrar
                    </div>
                @endif

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
        Highcharts.chart('container1', {

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
                data: @json($counts),
                color: '#164b6d'
            }]
        });
    </script>

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
        Highcharts.chart('container2', {

            chart: {
                type: 'line'
            },
            title: {
                text: 'Resultados por mes'
            },
            xAxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de resultados'
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
                name: 'Resultados Registrados',
                data: @json($results),
                color: '#164b6d'
            }]
        });
    </script>
@endsection
