@extends('adminlte::page')

@section('content')
    <div class="container">
        <a href="/ues" class="btn btn-info">Retour</a><br><br>
        <div class="col-4">
            @foreach($ues as $ue)
                <div class="card mb-2">
                    <div class="card-header text-center">
                        <h3>{{$ue->intitule}}</h3>
                    </div>
                    <div class="card-body">
                        <p>Cycle: {{$ue->code}}</p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Created at {{$ue->credits}}</small>
                    </div>
                </div><br>
            @endforeach
        </div>
    </div>
@endsection
