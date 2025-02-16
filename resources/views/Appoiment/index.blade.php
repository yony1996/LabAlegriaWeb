@extends('layouts.app')
@section('css')
    <style>
        /* Ajustes para múltiple select y despliegue hacia abajo */
        .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__rendered {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            padding: 4px 8px;
        }

        .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice {

            color: white;
            border: none;
            border-radius: 4px;
            padding: 2px 8px;
            display: flex;
            align-items: center;
        }

        .select2-container--bootstrap-5 .select2-selection--multiple .select2-search__field {
            margin: 0;
            padding: 0;
        }

        .select2-container--open .select2-dropdown--below {
            border-radius: 0 0 4px 4px;
            margin-top: -1px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Turnos</h3>
                </div>
                @hasrole('Paciente')
                    <div class="col text-right">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#exampleModal">Obtener un turno</button>

                    </div>
                @endrole
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="myTable" class="table">
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
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" style="max-width: 80%;"> <!-- Ancho al 80% -->
            <div class="modal-content bg-gradient-primary"> <!-- Estilo Argon -->
                <div class="modal-header bg-white rounded-top"> <!-- Header estilo Argon -->
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Reservar Turno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>

                <div class="modal-body bg-white"> <!-- Cuerpo estilo Argon -->
                    <form id="form" action="{{ route('appoiment.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="user_id" id="user" value="{{ Auth::user()->id }}">

                            <!-- Nombre -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Nombre</label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <input class="form-control form-control-alternative"
                                            value="{{ Auth::user()->name . ' ' . Auth::user()->last_name }}" type="text"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <!-- Cédula -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Cédula</label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <input class="form-control form-control-alternative" value="{{ Auth::user()->nui }}"
                                            type="text" name="nui">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Fecha -->
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="form-control-label">Fecha</label>
                                    <input type="text" name="scheduled_date"class="form-control form-control-alternative"
                                        id="datepicker" value="{{ date('Y-m-d') }}">
                                </div>

                            </div>

                            <!-- Hora -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Hora</label>
                                    <select class="form-control form-control-alternative" name="scheduled_time"
                                        id="hours">
                                        @if ($intervals)
                                            @foreach ($intervals as $key => $interval)
                                                <option value="{{ $interval }}">{{ $interval }}</option>
                                            @endforeach
                                        @else
                                            <option>Seleccione una fecha</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Tipo de Examen -->
                        {{-- <div class="form-group">
                            <label class="form-control-label">Tipo de Examen</label>
                            <select class="form-control form-control-alternative" name="exam_id">
                                <option value="">Seleccionar examen</option>
                                @foreach ($exams as $exam)
                                    <option value="{{ $exam->id }}" class="text-dark">{{ $exam->name }}</option>
                                @endforeach
                            </select> 
                         
                        </div> --}}
                        <div class="form-group">
                            <label class="form-control-label">Tipo de Examen</label>
                            <select class="form-control form-control-alternative select2-exam" name="exam_ids[]"
                                id="select2-exam" multiple="multiple">
                                @foreach ($exams as $exam)
                                    <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Footer -->
                        <div class="modal-footer bg-white rounded-bottom"> <!-- Footer estilo Argon -->
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success bg-gradient-success" id="save-data">
                                Reservar Turno
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{-- <script src="{{ asset('dist/lab/js/data-table.js') }}"></script> --}}
    <script src="{{ asset('dist/lab/js/modal-demo.js') }}"></script>
    <script src="{{ asset('dist/lab/js/datepicker-es.js') }}"></script>
    <script src="{{ asset('Appoimens/appoiments.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#select2-exam').select2({
                theme: "bootstrap-5",
                placeholder: "Seleccione uno o más exámenes",
                allowClear: true,
                dropdownParent: $('#exampleModal'),
                width: '100%',
                closeOnSelect: false, // Mantener abierto después de seleccionar
                language: {
                    noResults: function() {
                        return "No se encontraron resultados";
                    }
                },
                dropdownAutoWidth: true,
                selectionCssClass: 'form-control-alternative',
                dropdownCssClass: 'argon-select2-dropdown'
            });
            $('#save-data').click(function(event) {
                event.preventDefault();
                const url = $(this).attr('action');
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: "json",
                    data: $("form").serialize(),
                    success: function(response) {

                        $("#form").trigger("reset");
                        $('#exampleModal').hide();
                        $('.fade').hide();

                        if (response.success) {
                            toastr.success(response.success);
                            $('#myTable').DataTable().ajax.reload();
                        } else {
                            toastr.error(response.error);
                        }
                    },
                });
            });

            //load table
            $(function() {
                $("#myTable").DataTable({

                    aLengthMenu: [
                        [5, 10, 15, -1],
                        [5, 10, 15, "All"],
                    ],
                    iDisplayLength: 10,
                    language: {
                        search: "",
                        url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                    },
                    processing: true,
                    //serverSide: true,
                    ajax: '/appoiment/table',
                    columns: [{
                            data: 'fullname',
                            name: 'Paciente'
                        },
                        {
                            data: 'nameExam',
                            name: 'Examen'
                        },
                        {
                            data: 'scheduled_date',
                            name: 'Fecha'
                        },
                        {
                            data: 'scheduled_time',
                            name: 'Hora'
                        },
                        {
                            data: 'status',
                            name: 'Estado'
                        },

                    ]

                });
                $("#myTable").each(function() {
                    var datatable = $(this);
                    // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                    var search_input = datatable
                        .closest(".dataTables_wrapper")
                        .find("div[id$=_filter] input");
                    search_input.attr("placeholder", "Search");
                    search_input.removeClass("form-control-sm");
                    // LENGTH - Inline-Form control
                    var length_sel = datatable
                        .closest(".dataTables_wrapper")
                        .find("div[id$=_length] select");
                    length_sel.removeClass("form-control-sm");
                });
            });

        });
    </script>
@endsection
