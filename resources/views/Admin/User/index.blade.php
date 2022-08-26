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
                    <h3 class="mb-0">Usuarios</h3>
                </div>
                @if (session('status'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="col text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#exampleModal">Agregar Usuario</button>

                </div>
            </div>
        </div>
        <div class="card-body">
            <meta name="csrf-token" content="{{ csrf_token() }}" />
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Paciente</h5>
                    <button type="button" id="dismiss" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form" method="POST" action="{{ route('user.store') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col">
                                <label>Nombre</label>
                                <div class="input-group">

                                    <input type="text" name="name"
                                        class="form-control  @error('name') invalid @enderror form-control-lg"
                                        style="text-transform: uppercase;"
                                        oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');"
                                        value="{{ old('name') }}"placeholder="Nombre">

                                </div>
                                <small class="text-danger" id="name"></small>
                            </div>
                            <div class="col">
                                <label>Apellido</label>
                                <div class="input-group">

                                    <input type="text" name="last_name" class="form-control form-control-lg"
                                        style="text-transform: uppercase;"
                                        oninput="this.value = this.value.replace(/[^A-Za-z&ntilde;]/g,'').replace(/(\..*?)\..*/g, '$1');"
                                        placeholder="Apellido" value="{{ old('last_name') }}">

                                </div>
                                <small class="text-danger" id="last_name"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label>Edad</label>
                                <div class="input-group">
                                    <input type="text" name="age" class="form-control form-control-lg"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        maxlength="2" value="{{ old('age') }}"placeholder="Edad">

                                </div>
                                <small class="text-danger" id="age"></small>
                            </div>
                            <div class="col">
                                <label>Sexo</label>
                                <div class="input-group">
                                    <select class="form-control" name="gender">
                                        <option>--SELECCIONE UNA OPCION--</option>
                                        <option value="F">
                                            Femenino</option>
                                        <option value="M">
                                            Masculino</option>
                                    </select>

                                </div>
                                <small class="text-danger" id="gender"></small>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label>Cédula</label>
                                <div class="input-group">
                                    <input type="text" name="nui" class="form-control form-control-lg"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                        maxlength="10" minlength="10" placeholder="Cédula" value="{{ old('nui') }}">
                                </div>
                                <small class="text-danger" id="nui"></small>
                            </div>
                            <div class="col">
                                <label>Teléfono</label>
                                <div class="input-group">
                                    <input type="text" name="phone" class="form-control form-control-lg"
                                        oninput="this.value = this.value.replace(/[^0-9]/g,'').replace(/(\..*?)\..*/g, '$1');"
                                        maxlength="10" value="{{ old('phone') }}" placeholder="Celular">
                                </div>
                                <small class="text-danger" id="phone"></small>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <div class="input-group">
                                <input type="email" name="email"class="form-control form-control-lg"
                                    value="{{ old('email') }}" autocomplete="false" placeholder="Correo">
                            </div>
                            <small class="text-danger" id="email"></small>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="save-data">Registrar</button>
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
            //ELIMINAR USUARIO
            $(document).on('click', '#deleteUser', function(e) {
                var userId = $(this).data('id');
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
                            url: "/users/" + userId,
                            type: 'DELETE',
                            data: {
                                "id": userId,
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
            //SUSPENDER USUARIO
            $(document).on('click', '#statusUser', function(e) {
                var userId = $(this).data('id');
                var status = $(this).data('status');
                var token = $("meta[name='csrf-token']").attr("content");
                if (status == 1) {
                    swal({
                        title: '¿Estas Seguro?',
                        text: "Deseas suspender a este usuario",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3f51b5',
                        cancelButtonColor: '#ff4081',
                        confirmButtonText: 'Great ',
                        buttons: {
                            cancel: {
                                text: "Cancelar",
                                value: null,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true,
                            },
                            confirm: {
                                text: "Si",
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
                                url: "/user/" + userId + "/banned",
                                type: 'PATCH',
                                data: {
                                    "id": userId,
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
                } else {
                    swal({
                        title: '¿Estas Seguro?',
                        text: "Deseas activar a este usuario",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3f51b5',
                        cancelButtonColor: '#ff4081',
                        confirmButtonText: 'Great ',
                        buttons: {
                            cancel: {
                                text: "Cancelar",
                                value: null,
                                visible: true,
                                className: "btn btn-danger",
                                closeModal: true,
                            },
                            confirm: {
                                text: "Si",
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
                                url: "/user/" + userId + "/banned",
                                type: 'PATCH',
                                data: {
                                    "id": userId,
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
                }

            });
            $('#dismiss').click(function() {
                $("#form")[0].reset();
                $('#name').text('');
                $('#last_name').text('');
                $('#age').text('');
                $('#gender').text('');
                $('#nui').text('');
                $('#phone').text('');
                $('#email').text('');
            });
            //GUARDAR USUARIO
            $('#save-data').click(function(event) {
                event.preventDefault();
                const url = $(this).attr('action');
                console.log(url);
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: "json",
                    data: $("form").serialize(),
                    success: function(response) {
                        console.log(response.success);
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
                        $('#name').text(response.responseJSON.errors.name);
                        $('#last_name').text(response.responseJSON.errors.last_name);
                        $('#age').text(response.responseJSON.errors.age);
                        $('#gender').text(response.responseJSON.errors.gender);
                        $('#nui').text(response.responseJSON.errors.nui);
                        $('#phone').text(response.responseJSON.errors.phone);
                        $('#email').text(response.responseJSON.errors.email);
                    }
                });
            });
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
                            data: 'fullname',
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
