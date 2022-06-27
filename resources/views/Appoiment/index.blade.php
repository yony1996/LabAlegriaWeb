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
                <div class="col text-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target="#exampleModal">Click for demo<i class="fa fa-play-circle ml-1"></i></button>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th>Purchased On</th>
                                    <th>Customer</th>
                                    <th>Ship to</th>
                                    <th>Base Price</th>
                                    <th>Purchased Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2012/08/03</td>
                                    <td>Edinburgh</td>
                                    <td>New York</td>
                                    <td>$1500</td>
                                    <td>$3200</td>
                                    <td>
                                        <label class="badge badge-info">On hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2015/04/01</td>
                                    <td>Doe</td>
                                    <td>Brazil</td>
                                    <td>$4500</td>
                                    <td>$7500</td>
                                    <td>
                                        <label class="badge badge-danger">Pending</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2010/11/21</td>
                                    <td>Sam</td>
                                    <td>Tokyo</td>
                                    <td>$2100</td>
                                    <td>$6300</td>
                                    <td>
                                        <label class="badge badge-success">Closed</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>2016/01/12</td>
                                    <td>Sam</td>
                                    <td>Tokyo</td>
                                    <td>$2100</td>
                                    <td>$6300</td>
                                    <td>
                                        <label class="badge badge-success">Closed</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>2017/12/28</td>
                                    <td>Sam</td>
                                    <td>Tokyo</td>
                                    <td>$2100</td>
                                    <td>$6300</td>
                                    <td>
                                        <label class="badge badge-success">Closed</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>2000/10/30</td>
                                    <td>Sam</td>
                                    <td>Tokyo</td>
                                    <td>$2100</td>
                                    <td>$6300</td>
                                    <td>
                                        <label class="badge badge-info">On-hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>2011/03/11</td>
                                    <td>Cris</td>
                                    <td>Tokyo</td>
                                    <td>$2100</td>
                                    <td>$6300</td>
                                    <td>
                                        <label class="badge badge-success">Closed</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>2015/06/25</td>
                                    <td>Tim</td>
                                    <td>Italy</td>
                                    <td>$6300</td>
                                    <td>$2100</td>
                                    <td>
                                        <label class="badge badge-info">On-hold</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>2016/11/12</td>
                                    <td>John</td>
                                    <td>Tokyo</td>
                                    <td>$2100</td>
                                    <td>$6300</td>
                                    <td>
                                        <label class="badge badge-success">Closed</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>2003/12/26</td>
                                    <td>Tom</td>
                                    <td>Germany</td>
                                    <td>$1100</td>
                                    <td>$2300</td>
                                    <td>
                                        <label class="badge badge-danger">Pending</label>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>
                                </tr>
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
    <script src="{{ asset('dist/lab/js/data-table.js') }}"></script>
    <script src="{{ asset('dist/lab/js/modal-demo.js') }}"></script>
    <script src="{{ asset('dist/lab/js/datepicker-es.js') }}"></script>
    <script src="{{ asset('Appoimens/appoiments.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
                        }
                        toastr.error(response.error);
                    },
                    error: function(response) {

                        toastr.error(response.error);
                    }
                });
            });

        });
    </script>
@endsection
