@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Mi Examenes</h4>
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Paciente</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result )
                        <tr>
                            <td>{{$result->user->name}} {{$result->user->last_name}}</td>
                            <td>{{$result->created_at}}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-success" id="atendetAppoiment" data-id=""
                                    type="submit" data-toggle="tooltip" title="Descargar">
                                    <i class="fa fa-download"></i>
                                </button>

                                <a class="btn btn-sm btn-outline-primary"  title="Previsualizar" href="{{route('record.preview',$result->id)}}" target="_blank"> <i class="fa fa-eye"></i></a>

                            </td>
                        </tr>   
                        @endforeach
                        
                    </tbody>
                </table>

            </div>
        </div>
        <div class="card-body">
            {{ $results->links() }}
        </div>
    </div>
   
@endsection
