@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Usuarios</h3>
                </div>
                {{-- <div class="col text-right">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                    data-target="#exampleModal">Obtener un turno</button>

            </div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                    <th>Cedula</th>
                                    <th>Nombre Completo</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
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
@endsection

@section('js')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
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
                    // serverSide : true,
                    searching: true,
                    ajax: '/users/table',
                    columns: [{
                            data: 'nui',
                            name: 'Cedula'
                        },
                        {
                            data: 'fullName',
                            name: 'Nombre Completo'
                        },
                        {
                            data: 'email',
                            name: 'Correo'
                        },
                        {
                            data: 'phone',
                            name: 'Telefono'
                        },
                        {
                            data: 'status',
                            name: 'Estado'
                        },
                        {
                            data: 'action',
                            name: 'Acciones'
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
