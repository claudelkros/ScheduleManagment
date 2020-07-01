@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Créer une durée</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'DureeController@store', 'method' => 'POST']) !!}
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    {{Form::label('cours', 'Cours')}}
                                    {{Form::number('cours', '', ['class' => 'form-control', 'placeholder' => 'Cours '])}}
                                </div>
                                <div class="col-lg-5">
                                    {{Form::label('tp', 'TP')}}
                                    {{Form::number('tp', '', ['class' => 'form-control', 'placeholder' => 'TP'])}}
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    {{Form::label('tpe', 'TPE')}}
                                    {{Form::number('tpe', '', ['class' => 'form-control', 'placeholder' => 'TPE'])}}
                                </div>
                                <div class="col-lg-5">
                                    {{Form::label('td', 'TD')}}
                                    {{Form::number('td', '', ['class' => 'form-control', 'placeholder' => 'TD'])}}
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    {{Form::label('total', 'TOTAL')}}
                                    {{Form::number('total', '', ['class' => 'form-control', 'placeholder' => 'TOTAL'])}}
                                </div>
                            </div><br>
                            <div class="col-10 text-left">
                                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
