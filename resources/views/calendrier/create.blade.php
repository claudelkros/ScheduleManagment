@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center"><h1>Choisir le département dont vous voulez concevoir l'emploi de temps</h1></div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'CalendrierController@store', 'method' => 'POST']) !!}
                            @csrf
                            <div class="row">
                                <div class="col-lg-8 offset-2 text-center">
                                    {{Form::label('calendrier', 'Semestre')}}
                                    <select name="semestre" class="form-control" id="nom_cour">
                                        @foreach( $semestres as $semestre)
                                            <option value="{{$semestre->id}}">{{$semestre->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-2">
                                    {{Form::label('calendrier', 'Heure de début')}}
                                    <select name="heure_debut" class="form-control" id="heure_debut">
                                        <option value="07h30">07h30</option>
                                        <option value="08h30">08h30</option>
                                        <option value="09h30">09h30</option>
                                        <option value="10h30">10h30</option>
                                        <option value="11h30">11h30</option>
                                        <option value="12h30">12h30</option>
                                        <option value="13h30">13h30</option>
                                        <option value="14h30">14h30</option>
                                        <option value="15h30">15h30</option>
                                        <option value="16h30">16h30</option>
                                        <option value="17h30">17h30</option>
                                        <option value="18h30">18h30</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-2">
                                    {{Form::label('calendrier', 'Heure de fin')}}
                                    <select name="heure_fin" class="form-control" id="heure_fin">
                                        <option value="07h30">07h30</option>
                                        <option value="08h30">08h30</option>
                                        <option value="09h30">09h30</option>
                                        <option value="10h30">10h30</option>
                                        <option value="11h30">11h30</option>
                                        <option value="12h30">12h30</option>
                                        <option value="13h30">13h30</option>
                                        <option value="14h30">14h30</option>
                                        <option value="15h30">15h30</option>
                                        <option value="16h30">16h30</option>
                                        <option value="17h30">17h30</option>
                                        <option value="18h30">18h30</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-2">
                                    {{Form::label('calendrier', 'Jour')}}
                                    <select name="jour" class="form-control" id="jour">
                                        <option value="lundi">lundi</option>
                                        <option value="mardi">Mardi</option>
                                        <option value="mercredi">Mercredi</option>
                                        <option value="jeudi">Jeudi</option>
                                        <option value="vendredi">Vendredi</option>
                                        <option value="samedi">Samedi</option>
                                        <option value="dimanche">Dimanche</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-2">
                                    {{Form::label('calendrier', 'Intitulé du cour')}}
                                    <select name="nom_cour" class="form-control" id="nom_cour">
                                        @foreach( $cours as $cour)
                                            <option value="{{$cour->intitule}}">{{$cour->intitule}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-2">
                                    {{Form::label('calendrier', 'Nom de L\'enseignant')}}
                                    <select name="nom_enseignant" class="form-control" id="nom_enseignant">
                                        @foreach($enseignants as $enseignant)
                                            <option value="{{$enseignant->nom}}">{{$enseignant->nom}}  {{$enseignant->prenom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-2">
                                    {{Form::label('calendrier', 'Nom de la Salle')}}
                                    <select name="nom_salle" class="form-control" id="nom_salle">
                                        @foreach($salles as $salle)
                                            <option value="{{$salle->nom}}">{{$salle->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        <br>
                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary col-lg-8 offset-2']) !!}
                        {!! Form::close() !!}
                        <div class="col-lg-8 offset-2"><br><br>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
