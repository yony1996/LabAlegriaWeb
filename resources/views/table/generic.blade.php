@extends('layouts.app')

@section('css')
    <style>
        .bar-1 {
            background: #74c7d6;
            text-align: center;
        }

        .elem {
            margin-left:
                margin-right: auto;
            font-weight: bold;
            display: inline-flex;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <ul class="nav nav-tabs " id="myTab" role="tablist">

            <li class="nav-item " role="presentation">
                <a class="nav-link text-sm active" id="pen-tab" data-toggle="tab" href="#pen" aria-controls="pen"
                    role="tab" aria-selected="true">Turnos Pendientes</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-sm" id="ate-tab" data-toggle="tab" href="#ate" aria-controls="ate"
                    role="tab" aria-selected="false">Turnos Atendidos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-sm" id="can-tab" data-toggle="tab" href="#can" aria-controls="can"
                    role="tab" aria-selected="false">Turnos Cancelados</a>
            </li>

        </ul>


        <div class="card-body">

            <form action="" method="POST">
                @csrf
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="pen" role="tabpanel" aria-labelledby="pen-tab">

                       @include('table.pending')

                    </div>

                    <div class="tab-pane fade" id="ate" role="tabpanel" aria-labelledby="ate-tab">
                       @include('table.atendet')
                    </div>

                    <div class="tab-pane fade" id="can" role="tabpanel" aria-labelledby="can-tab">
                        @include('table.canceled')
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
