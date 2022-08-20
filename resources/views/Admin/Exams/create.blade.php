@extends('layouts.app')

@section('content')
    <div class="card p-4 mb-4">
        <div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <div style="background: #74c7d6">
                        DATOS PACIENTE
                        <hr style="border:2px solid black">
                    </div>
                    <div class="d-flex" style="margin: 16px;">
                        <p style="margin-left: 16px; margin-right: 40px;">NOMBRES:</p>
                        <input type="text" id="name" class="form-control" style="width: 300px;">
                    </div>
                    <div class="d-flex" style="margin: 16px;">
                        <p style="margin-left: 16px; margin-right: 28px;">PASAPORTE:</p>
                        <input type="text" id="search" class="typeahead form-control" style="width: 300px;">
                    </div>
                    <div class="d-flex" style="margin: 16px;">
                        <p style="margin-left: 16px; margin-right: 70px;">EDAD:</p>
                        <input type="text" id="edad" class="form-control" style="width: 300px;">
                    </div>
                    <div class="d-flex" style="margin: 16px;">
                        <p style="margin-left: 16px; margin-right: 50px;">GENERO:</p>
                        <input type="text" id="gender" class="form-control" style="width: 300px;">
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div style="background: #74c7d6">
                        INFORMACION DEL PACIENTE
                        <hr style="border:2px solid black">
                    </div>

                    <div style="margin-top: 20px; background: #74c7d6">
                        <hr style="border:2px solid black">
                        INFORMACION DEL SOLICITANTE
                        <hr style="border:2px solid black">
                    </div>

                    <div class="d-flex">
                        <p style="margin-left: 16px; margin-right: 50px;">Dr.</p>
                        <input type="text" class="form-control" id="doctor" style="margin-left:90px; width: 300px;">
                    </div>
                    <hr style="border:2px solid black">
                    <div class="d-flex" style="margin-top: 20px;">

                        <p style="margin-left: 16px; margin-right: 50px;">Número de Orden:</p>
                        <input type="text" class="form-control" id="orden" style="margin-right: 20px; width: 300px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <ul class="nav nav-tabs " id="myTab" role="tablist">

            <li class="nav-item " role="presentation">
                <a class="nav-link text-sm active" id="hema-tab" data-toggle="tab" href="#hema" aria-controls="hema"
                    role="tab" aria-selected="true">Hematologia</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-sm" id="copro-tab" data-toggle="tab" href="#copro" aria-controls="copro"
                    role="tab" aria-selected="false">Coprologico</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-sm" id="ori-tab" data-toggle="tab" href="#ori" aria-controls="ori"
                    role="tab" aria-selected="false">Orina</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-sm" id="cov-tab" data-toggle="tab" href="#cov" aria-controls="cov"
                    role="tab" aria-selected="false">Covid</a>
            </li>

        </ul>


        <div class="card-body">

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="hema" role="tabpanel" aria-labelledby="hema-tab">
                    @include('Admin.Exams.tabs.hematologico')
                </div>

                <div class="tab-pane fade" id="copro" role="tabpanel" aria-labelledby="copro-tab">
                    @include('Admin.Exams.tabs.coprologico')
                </div>

                <div class="tab-pane fade" id="ori" role="tabpanel" aria-labelledby="ori-tab">
                    @include('Admin.Exams.tabs.orina')
                </div>

                <div class="tab-pane fade" id="cov" role="tabpanel" aria-labelledby="cov-tab">
                    @include('Admin.Exams.tabs.covid')
                </div>


            </div>

        </div>
    </div>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .aParent div {
            float: left;
            clear: none;
        }
    </style>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $("#search").autocomplete({

            source: function(request, response) {

                $.ajax({

                    url: path,

                    type: 'GET',

                    dataType: "json",

                    data: {

                        search: request.term

                    },

                    success: function(data) {

                        response(data);

                    }

                });

            },

            select: function(event, ui) {

                let orden = document.getElementById('orden').value

                $('#search').val(ui.item.label);
                $('#name').val(ui.item.fullname);
                $('#edad').val(ui.item.age);
                $('#gender').val(ui.item.gender);
                $('#id').val(ui.item.id);
                $('#id2').val(ui.item.id);
                $('#id3').val(ui.item.id);
                $('#id4').val(ui.item.id);

                $('ord1').val(orden);

                console.log(ui.item);

                return false;

            }


        });
    </script>

    <script>
        $(document).ready(function() {

            $("#doctor").keyup(function() {
                var doctor = document.getElementById('doctor').value;
                $("#doc").val(doctor);
                $("#doc2").val(doctor);
                $("#doc3").val(doctor);
                $("#doc4").val(doctor);
            })
            $("#orden").keyup(function() {
                var orden = document.getElementById('orden').value;
                $("#ord").val(orden);
                $("#ord2").val(orden);
                $("#ord3").val(orden);
                $("#ord4").val(orden);
            })
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if (session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif

    @if (session('errors'))
        <script>
            toastr.warning('{{ session('errors') }}');
        </script>
    @endif
@endsection
