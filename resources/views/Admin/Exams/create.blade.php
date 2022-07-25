@extends('layouts.app')

@section('content')
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

            <form action="" method="POST">
                @csrf
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
            </form>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .bar-1{
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
