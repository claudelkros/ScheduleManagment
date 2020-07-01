@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Créer d'un Enseignant</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'EnseignantController@store', 'method' => 'POST']) !!}
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="departement">Departement</label>
                                    <select name="departement" class="form-control" id="departement">
                                        @foreach($departements as $departement)
                                            {{$departement->nom}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                {{Form::label('Nom', 'Nom')}}
                                {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom de L\'enseignant'])}}
                            </div>

                            <div class="col-md-6">
                                {{Form::label('Prenom', 'Prenom')}}
                                {{Form::text('prenom', '', ['class' => 'form-control', 'placeholder' => 'prenom'])}}
                            </div>

                            <div class="col-md-6">
                                {{Form::label('grade', 'Grade')}}
                                {{Form::text('grade', '', ['class' => 'form-control', 'placeholder' => 'grade'])}}
                            </div>
                            <div class="col-md-6">
                                {{Form::label('Matricule', 'Matricule')}}
                                {{Form::text('matricule', '', ['class' => 'form-control', 'placeholder' => 'Matricule'])}}
                            </div>
                        </div><br>
                        {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
