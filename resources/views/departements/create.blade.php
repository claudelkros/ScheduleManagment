@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Créer un département</div>
                <div class="card-body">
                    {!! Form::open(['action' => 'DepartementController@store', 'method' => 'POST', 'enctype' =>
                    'multipart/form-data' ]) !!}
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            {{Form::label('nom', 'Nom')}}
                            {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom du departement'])}}
                        </div>
                        <div class="col-lg-4">
                            {{Form::label('abreviation', 'Abreviation')}}
                            {{Form::text('abreviation', '', ['class' => 'form-control', 'placeholder' => 'Abreviation(FS par exemple)'])}}
                        </div>
                        <div class="col-lg-4">
                            {{Form::label('faculté', 'Faculté')}}
                            <select name="faculte_id" class="form-control" id="departement_id">
                                @foreach ($facultes as $faculte)
                                <option value="{{$faculte->id}}">{{$faculte->nom}}</option>
                                @endforeach
                            </select>
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
