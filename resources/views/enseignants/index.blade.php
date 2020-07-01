@extends('adminlte::page')

@section('content')
    <div class="container">
        <a href="/enseignants" class="btn btn-info">Retour</a><br><br>
        <div class="row">
            @foreach($enseignants as $enseignant)
                <div class="card mb-2 col-4">
                    <div class="card-header text-center">
                        <h3>{{$enseignant->nom}} {{$enseignant->prenom}}</h3>
                    </div>
                    <div class="card-body text-bold text-center">
                        <p>Grade: {{$enseignant->grade}}</p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <small>Matricule: {{$enseignant->matricule}}</small>
                    </div>
                </div><br>
            @endforeach
        </div>
    </div>
@endsection
