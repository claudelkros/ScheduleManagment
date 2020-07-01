@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Liste des Facultés</div><br>
                @if (count($facultes) > 0)
                    <div class="row mb-2">
                        @foreach ($facultes as $faculte)
                            <div class="col-md-6">
                                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <h3 class="mb-0">{{$faculte->nom}}</h3>
                                        <h2 class="card-text mb-auto text-center"><span>{{$faculte->abreviation}}</span></h2>
                                        <a href="/facultes/{{$faculte->id}}" class="stretched-link btn btn-info">Voir plus</a>
                                    </div>
                                    <div class="col-auto d-none d-lg-block">
                                        @if ($faculte->logo === 'default.jpg')
                                            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                        @else
                                            <img style="width: 200px; height: 200px" class="align-self-center" src="/storage/img/{{$faculte->logo}}" >
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-10">
                            <p>Aucune faculté enregistrer dans la base des données !!!</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
