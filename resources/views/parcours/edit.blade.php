@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier un Parcours</div>
                        <div class="card-body">
                            {!! Form::open(['action' => 'ParcoursController@update', 'method' => 'PUT', 'enctype' => 'multipart/form-data' ]) !!}
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        {{Form::label('nom', 'Nom')}}
                                        {{Form::text('nom', $parcour->nom, ['class' => 'form-control', 'placeholder' => 'Nom du Parcour'])}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="niveau_id">Niveau</label>
                                            <select name="niveau_id" class="form-control" id="niveau_id">
                                                @foreach ($niveaux as $niveau)
                                                <option value="{{$niveau->id}}">{{$niveau->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::hidden('_method', 'PUT') !!}
                            {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
