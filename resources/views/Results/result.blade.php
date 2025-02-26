@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Examenes</h4>
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            @hasanyrole('Admin|Bioquimico')
                            <th>Paciente</th>
                            @endhasanyrole
                            <th>Tipo</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result )
                        <tr>
                            @hasanyrole('Admin|Bioquimico')
                            <td>{{$result->user->name}} {{$result->user->last_name}}</td>
                            @endhasanyrole    
                            <td>{{$result->type}}</td>
                            <td>{{$result->created_at->format('Y-m-d')}}</td>
                            <td>
                             
                                <a class="btn btn-sm btn-outline-success"  title="Descargar" href="{{route('record.print',$result->id)}}" ><i class="fa fa-download"></i></a>

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
