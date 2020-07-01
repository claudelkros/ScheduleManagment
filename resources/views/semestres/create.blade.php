@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Créer un Semestre</div>
                        <div class="card-body">
                            {!! Form::open(['action' => 'SemestreController@store', 'method' => 'POST' ]) !!}
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        {{Form::label('nom', 'Nom')}}
                                        {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom du semestre'])}}
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
                            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
