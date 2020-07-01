@extends('adminlte::page')

@section('content')
    <div class="container">
        <a href="/niveaux" class="btn btn-info">Retour</a><br><br>
        <div class="col-12">
             <div class="card mb-2">
                 <div class="card-header text-center">
                     <h3>{{$niveau->nom}}</h3>
                 </div>
                 <div class="card-body">
                     <p>Cycle: {{$niveau->cycle->nom}}</p>
                 </div>
                 <div class="card-footer text-muted text-center">
                     <small>Created at {{$niveau->created_at}}</small>
                 </div>
             </div><br>
        </div>
    </div>
@endsection
