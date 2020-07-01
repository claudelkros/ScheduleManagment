@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
            <h5 class="card-title">{{$cycle->departement->nom}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$cycle->type}}</h6>
            <p class="card-text">{{$cycle->type}}</p>
            </div>
        </div>
    </div>
@endsection
