@extends('layouts.app')
@section('css')
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reservar Turno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form" action="{{ route('appoiment.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="user_id" id="user" value="{{ Auth::user()->id }}">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" readonly class="form-control-plaintext form-control-sm"
                                            value="{{ Auth::user()->name . ' ' . Auth::user()->last_name }}">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="form-group">
                                        <label>Cédula:</label>
                                        <input type="text" readonly class="form-control-plaintext form-control-sm"
                                            value="{{ Auth::user()->nui }}">
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="form-group">
                                        <label>Fecha:</label>
                                        <input type="text" name="scheduled_date"class="form-control form-control-sm"
                                            id="datepicker" value="{{ date('Y-m-d') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="form-group">
                                        <label>Hora:</label>
                                        <select class="form-control" name="scheduled_time" id="hours">
                                            @if ($intervals)
                                                @foreach ($intervals as $key => $interval)
                                                    <option id="interval{{ $key }}" value="{{ $interval }}"
                                                        for="interval{{ $key }}">{{ $interval }}</option>
                                                @endforeach
                                            @else
                                                <option>Seleccione una fecha.</option>
                                            @endif

                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tipo de Examen:</label>
                                    <select class="form-control" name="exam_id">
                                        <option value="">Seleccionar examen</option>
                                        @foreach ($exams as $exam)
                                            <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="save-data">Reservar</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
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
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

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
