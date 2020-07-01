@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Créer une Faculté</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'FaculteController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    {{Form::label('nom', 'Nom')}}
                                    {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom du faculté'])}}
                                </div>
                                <div class="col-lg-5">
                                    {{Form::label('abreviation', 'Abreviation')}}
                                    {{Form::text('abreviation', '', ['class' => 'form-control', 'placeholder' => 'Abreviation(FS par exemple)'])}}
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    {{Form::label('responsable', 'Nom du Doyen')}}
                                    {{Form::text('responsable', '', ['class' => 'form-control', 'placeholder' => 'Entrez le Nom du Doyen'])}}
                                </div>
                                <div class="col-lg-5 mt-4">
                                    {{Form::file('logo')}}
                                </div>
                            </div>
                            <div class="col-10 text-left mt-2 ml-5">
                                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
