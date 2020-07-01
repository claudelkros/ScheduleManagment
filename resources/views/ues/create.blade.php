@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Créer une UE</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'UEController@store', 'method' => 'POST']) !!}
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('Code UE', 'Code UE')}}
                            {{Form::text('code', '', ['class' => 'form-control', 'placeholder' => 'Code de UE'])}}
                        </div>

                        <div class="col-md-6">
                            {{Form::label('intitule', 'Intitule')}}
                            {{Form::text('intitule', '', ['class' => 'form-control', 'placeholder' => 'Nom de UE'])}}
                        </div>

                        <div class="col-md-6">
                            {{Form::label('Credits', 'Credits')}}
                            {{Form::text('credits', '', ['class' => 'form-control', 'placeholder' => 'Credits de UE'])}}
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="semestre_id">Semestre</label>
                                <select name="semestre_id" class="form-control" id="semestre_id">
                                    @foreach( $semestres as $semestre)
                                        <option value="{{$semestre->id}}">{{$semestre->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="departement_id">Departement</label>
                                <select name="departement_id" class="form-control" id="departement_id">
                                    @foreach( $departements as $departemnt)
                                        <option value="{{$departemnt->id}}">{{$departemnt->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div><br>
                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
