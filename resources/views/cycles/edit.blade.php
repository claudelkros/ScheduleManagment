@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Modifier un cycle</div>
                        <div class="card-body">
                            {!! Form::open(['action' => 'CycleController@update', 'method' => 'PUT']) !!}
                                @csrf
                                <div class="row">
                                    <div class="col-lg-5">
                                        {{Form::label('nom', 'Nom')}}
                                        {{Form::text('nom', $cycle->nom, ['class' => 'form-control', 'placeholder' => 'Nom du cycle'])}}
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="departement_id">Departement</label>
                                            <select name="departement_id" class="form-control" id="departement_id">
                                                @foreach ($departements as $departement)
                                                <option value="{{$departement->id}}">{{$departement->nom}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="Licence">Licence</option>
                                                <option value="Master">Master</option>
                                                <option value="PhD">PhD</option>
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
