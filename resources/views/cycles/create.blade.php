@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Créer un cycle pour un departement</div>
                        <div class="card-body">
                            {!! Form::open(['action' => 'CycleController@store', 'method' => 'POST']) !!}
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Nom du cycle</label>
                                            <select name="nom" id="type" class="form-control">
                                                <option value="Licence">Licence</option>
                                                <option value="Master">Master</option>
                                                <option value="PhD">PhD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
