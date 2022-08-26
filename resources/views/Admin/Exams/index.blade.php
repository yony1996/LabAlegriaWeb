@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Examenes</h3>
                </div>
                <div class="col text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#exampleModal">Agregar Examen</button>

                </div>
            </div>
        </div>
        <div class="card-body">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Examen</h5>
                    <button type="button" class="close" id="dismiss" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form" action="{{ route('exam.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nombre</label>
                            <input type="text" name="name" class="form-control" id="name"
                                style="text-transform: uppercase;"
                                oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');">
                            <small class="text-danger" id="nam"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Descipcion</label>
                            <input type="text" name="description" class="form-control" id="description"
                                style="text-transform: uppercase;"
                                oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');">
                            <small class="text-danger" id="descrip"></small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="save-data">Guardar</button>
                        </div>
                    </form>
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
            $('#dismiss').click(function() {
                $("#form")[0].reset();
                $('#nam').text('');
                $('#descrip').text('');

            });
            //Guardar examen
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
                    error: function(response) {
                        $('#nam').text(response.responseJSON.errors.name);
                        $('#descrip').text(response.responseJSON.errors.description);
                    }
                });
            });
            //Eliminar examen
            $(document).on('click', '#deleteExam', function(e) {
                var examId = $(this).data('id');
                var token = $("meta[name='csrf-token']").attr("content");
                swal({
                    title: '¿Estas Seguro?',
                    text: "Deseas eliminar este registro",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3f51b5',
                    cancelButtonColor: '#ff4081',
                    confirmButtonText: 'Great ',
                    buttons: {
                        cancel: {
                            text: "Cancel",
                            value: null,
                            visible: true,
                            className: "btn btn-danger",
                            closeModal: true,
                        },
                        confirm: {
                            text: "OK",
                            value: true,
                            visible: true,
                            className: "btn btn-primary",
                            closeModal: true
                        }
                    }
                }).then(function(result) {
                    console.log(result);
                    if (result) {
                        $.ajax({
                            url: "/exams/" + examId,
                            type: 'DELETE',
                            data: {
                                "id": examId,
                                "_token": token,
                            },
                            success: function(response) {
                                console.log(response);
                                if (response.success) {
                                    toastr.success(response.success);
                                    $('#myTable').DataTable().ajax.reload();
                                } else {
                                    toastr.error(response.error);
                                }
                            },
                        })
                    }
                });
            });
            //Desactivar examen
            $(document).on('click', '#statusExam', function(e) {
                var examId = $(this).data('id');
                var status = $(this).data('status');
                var token = $("meta[name='csrf-token']").attr("content");
                swal({
                    title: '¿Estas Seguro?',
                    text: "Deseas desactivar examen",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3f51b5',
                    cancelButtonColor: '#ff4081',
                    confirmButtonText: 'Great ',
                    buttons: {
                        cancel: {
                            text: "Cancel",
                            value: null,
                            visible: true,
                            className: "btn btn-danger",
                            closeModal: true,
                        },
                        confirm: {
                            text: "OK",
                            value: true,
                            visible: true,
                            className: "btn btn-primary",
                            closeModal: true
                        }
                    }
                }).then(function(result) {
                    console.log(result);
                    if (result) {
                        $.ajax({
                            url: "/exams/" + examId + "/status",
                            type: 'PUT',
                            data: {
                                "id": examId,
                                "status": status,
                                "_token": token,
                            },
                            success: function(response) {
                                console.log(response);
                                if (response.success) {
                                    toastr.success(response.success);
                                    $('#myTable').DataTable().ajax.reload();
                                } else {
                                    toastr.error(response.error);
                                }
                            },
                        })
                    }
                });
            });
            //tabla
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
                    ajax: '/exams/table',
                    columns: [{
                            data: 'name',
                            name: 'Nombres'
                        },
                        {
                            data: 'description',
                            name: 'Descripción'
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
