@extends('adminlte::page')

@section('content')
    <div class="container">
            <div class="card">
                <div class="card-header">Liste des departements</div><br>
                @if (count($departements) > 0)
                    <div class="row mb-2">
                        @foreach ($departements as $departement)
                            <div class="col-md-6 col-lg-4">
                                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                    <div class="col p-4 d-flex flex-column position-static">
                                        <strong class="d-inline-block mb-2 text-primary">Faculté des sciences</strong>
                                        <h3 class="mb-0">{{$departement->nom}}</h3>
                                        <h2 class="card-text mb-auto text-center">{{$departement->abreviation}}</h2>
                                        <a href="/departements/{{$departement->id}}" class="stretched-link btn btn-info">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{$departements->links()}}
                @else
                    <p> Aucun Enregistrement dans la base des données</p>
                @endif
            </div>
    </div>
@endsection
