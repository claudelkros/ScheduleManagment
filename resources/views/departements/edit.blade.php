@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                <div class="card-header">Modifier {{$departement->nom}}</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'DepartementController@update', 'method' => 'POST']) !!}
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    {{Form::label('nom', 'Nom')}}
                                    {{Form::text('nom', $departement->nom, ['class' => 'form-control'])}}
                                </div>
                                <div class="col-md-6">
                                    {{Form::label('abreviation', 'Abreviation')}}
                                    {{Form::text('abreviation', $departement->abreviation, ['class' => 'form-control'])}}
                                </div>
                            </div><br>
                            {!! Form::hidden('_method', 'PUT') !!}
                            {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
