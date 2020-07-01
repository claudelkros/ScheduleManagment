@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6"><h1>Emplois de temps </h1></div><div class="col-lg-6 text-right"> <h1>Semestre</h1></div>
        </div>
        <div class="row p-4 bg-info text-info">
            <div class="col-lg-1 mr-2 text-right text-bold" style="width: 15rem; transform-origin: 0 0;transform: rotate(90deg);">LUNDI</div>
                @foreach( $calendrier as $calendar)
                    @if($calendar->jour == 'lundi')
                        <div class="col-lg-2 card p-2" style="width: 15rem;">
                            <div class="card-body text-left">
                                <span class="card-subtitle text-info">{{$calendar->heure_debut}} - {{$calendar->heure_fin}}</span><br>
                                <span class="card-subtitle text-info">{{$calendar->nom_cour}}</span><br>
                                <span class="card-subtitle text-info">{{$calendar->nom_enseignant}}</span><br>
                                <span class="card-subtitle text-info">{{$calendar->nom_salle}}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
        <hr>
        <div class="row p-4 bg-light">
            <div class="col-lg-1 mr-2 text-right text-bold" style="width: 15rem; transform-origin: 0 0;transform: rotate(90deg);">Mardi</div>
                @foreach( $calendrier as $calendar)
                    @if($calendar->jour == 'mardi')
                        <div class="col-lg-2 card" style="width: 15rem;">
                            <div class="card-body text-left">
                                <span class="card-subtitle">{{$calendar->heure_debut}} - {{$calendar->heure_fin}}</span><br>
                                <span class="card-subtitle">{{$calendar->nom_cour}}</span><br>
                                <span class="card-subtitle">{{$calendar->nom_enseignant}}</span><br>
                                <span class="card-subtitle">{{$calendar->nom_salle}}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
        <hr>
        <div class="row p-4 bg-primary">
            <div class="col-lg-1 mr-2 text-right text-bold" style="width: 15rem; transform-origin: 0 0;transform: rotate(90deg);">Mercredi</div>
                @foreach( $calendrier as $calendar)
                    @if($calendar->jour == 'mercredi')
                        <div class="col-lg-2 card" style="width: 15rem;">
                            <div class="card-body text-left">
                                <span class="card-subtitle text-primary">{{$calendar->heure_debut}} - {{$calendar->heure_fin}}</span><br>
                                <span class="card-subtitle text-primary">{{$calendar->nom_cour}}</span><br>
                                <span class="card-subtitle text-primary">{{$calendar->nom_enseignant}}</span><br>
                                <span class="card-subtitle text-primary">{{$calendar->nom_salle}}</span>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
        <hr>
        <div class="row p-4 bg-light">
            <div class="col-lg-1 mr-2 text-right text-bold" style="width: 15rem; transform-origin: 0 0;transform: rotate(90deg);">Jeudi</div>
            @foreach( $calendrier as $calendar)
                @if($calendar->jour == 'jeudi')
                    <div class="col-lg-2 card" style="width: 15rem;">
                        <div class="card-body text-left">
                            <span class="card-subtitle">{{$calendar->heure_debut}} - {{$calendar->heure_fin}}</span><br>
                            <span class="card-subtitle">{{$calendar->nom_cour}}</span><br>
                            <span class="card-subtitle">{{$calendar->nom_enseignant}}</span><br>
                            <span class="card-subtitle">{{$calendar->nom_salle}}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <hr>
        <div class="row p-4 bg-danger">
            <div class="col-lg-1 mr-2 text-right text-bold" style="width: 15rem; transform-origin: 0 0;transform: rotate(90deg);">Vendredi</div>
            @foreach( $calendrier as $calendar)
                @if($calendar->jour == 'vendredi')
                    <div class="col-lg-2 card" style="width: 15rem;">
                        <div class="card-body text-left">
                            <span class="card-subtitle text-danger">{{$calendar->heure_debut}} - {{$calendar->heure_fin}}</span><br>
                            <span class="card-subtitle text-danger">{{$calendar->nom_cour}}</span><br>
                            <span class="card-subtitle text-danger">{{$calendar->nom_enseignant}}</span><br>
                            <span class="card-subtitle text-danger">{{$calendar->nom_salle}}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <hr>
        <div class="row p-4 bg-light">
            <div class="col-lg-1 mr-2 text-right text-bold" style="width: 15rem; transform-origin: 0 0;transform: rotate(90deg);">Samedi</div>
            @foreach( $calendrier as $calendar)
                @if($calendar->jour == 'samedi')
                    <div class="col-lg-2 card" style="width: 15rem;">
                        <div class="card-body text-left">
                            <span class="card-subtitle">{{$calendar->heure_debut}} - {{$calendar->heure_fin}}</span><br>
                            <span class="card-subtitle">{{$calendar->nom_cour}}</span><br>
                            <span class="card-subtitle">{{$calendar->nom_enseignant}}</span><br>
                            <span class="card-subtitle">{{$calendar->nom_salle}}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <hr>
        <div class="row p-4 bg-success">
            <div class="col-lg-1 mr-2 text-right text-bold" style="width: 15rem; transform-origin: 0 0;transform: rotate(90deg);">Dimanche</div>
            @foreach( $calendrier as $calendar)
                @if($calendar->jour == 'dimanche')
                    <div class="col-lg-2 card" style="width: 15rem;">
                        <div class="card-body text-left">
                            <span class="card-subtitle text-success">{{$calendar->heure_debut}} - {{$calendar->heure_fin}}</span><br>
                            <span class="card-subtitle text-success">{{$calendar->nom_cour}}</span><br>
                            <span class="card-subtitle text-success">{{$calendar->nom_enseignant}}</span><br>
                            <span class="card-subtitle text-success">{{$calendar->nom_salle}}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        </div>
    </div>
@endsection
