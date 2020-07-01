@extends('adminlte::page')

@section('content')
    <div class="container">
        <a href="/ues" class="btn btn-info">Retour</a><br><br>
        <div class="row">
            @foreach($ues as $ue)
                <div class="card mb-2 col-4">
                    <div class="card-header text-center">
                        <h3>{{$ue->intitule}}</h3>
                    </div>
                    <div class="card-body">
                        <p>Cycle: {{$ue->code}}</p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Created at {{$ue->credits}}</small>
                    </div>
                    <a href="{{route('ues.show', $ue->id)}}" class="card-link">Detail</a>
                </div><br>
            @endforeach
        </div>
    </div>
@endsection
