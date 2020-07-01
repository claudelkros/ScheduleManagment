@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Créer un niveau</div>
                        <div class="card-body">
                            {!! Form::open(['action' => 'NiveauController@update', 'method' => 'PUT']) !!}
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        {{Form::label('nom', 'Nom')}}
                                        {{Form::text('nom', $niveau->nom, ['class' => 'form-control', 'placeholder' => 'Nom du niveau'])}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cycle_id">Cycle</label>
                                            <select name="cycle_id" class="form-control" id="cycle_id">
                                                @foreach ($cycles as $cycle)
                                                <option value="{{$cycle->id}}">{{$cycle->nom}}</option>
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
