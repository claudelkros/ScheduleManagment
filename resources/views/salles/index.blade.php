@extends('adminlte::page');

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Liste des salles de cours par faculté</div><br>
                @if (count($salles) > 0)
                    <div class="row mb-2">
                        @foreach ($salles as $salle)
                            <div class="col-md-4">
                                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <h3 class="mb-0">{{$salle->faculte->nom}}</h3>
                                        <h3 class="mb-0">{{$salle->nom}}</h3>
                                        <h2 class="card-text mb-auto text-center"><span>{{$salle->lieu}}</span></h2>
                                    <a href="/salles/{{$salle->id}}" class="stretched-link btn btn-info">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-10">
                            <p>Aucune Salle enregistré dans la base des données !!!</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection