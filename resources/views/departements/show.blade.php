@extends('adminlte::page')

@section('content')
   <div class="container">
       <a href="/departements" class="btn btn-info">Retour</a><br><br>
       <div class="row justify-content-center">
            <div class="col-8">
                    <div class="card mb-2">
                        <div class="card-header text-center">
                            <h3>{{$departement->nom}}</h3>
                        </div>
                        <div class="card-body">
                            <p>Abréviation: {{$departement->abreviation}}</p>
                        </div>
                        <div class="card-footer text-muted text-center">
                            <small>Created at {{$departement->created_at}}</small>
                        </div>
                    </div><br>
            </div>
            <div class="col-8">
                @if(!Auth::guest())
                    @if (Auth::user()->id == $departement->user_id)
                        <div class="col-md-4 col-sm-4">
                            <a href="{{route('departements.edit', $departement->id)}}" class="btn btn-info">Modifier</a>
                        </div><br><br>
                        <div class="col-md-4 col-sm-4">
                            {!! Form::open(['action' => ['DepartementController@destroy', $departement->id], 'method' => 'POST']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    @endif
                @endif
            </div>
       </div>
   </div>
@endsection


