@extends('adminlte::page');

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Ajouter une nouvelle salle</div><br>
                    {!! Form::open(['action' => 'SalleController@store', 'method' => 'POST']) !!}
                    @csrf
                    <div class="row">
                        <div class="col-lg-5">
                            {{Form::label('nom', 'Nom')}}
                            {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom de la salle'])}}
                        </div>
                        <div class="col-lg-5">
                            {{Form::label('lieu', 'Lieu')}}
                            {{Form::text('lieu', '', ['class' => 'form-control', 'placeholder' => 'Entrez le lieu'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="faculte_id">Faculté</label>
                                <select name="faculte_id" class="form-control" id="faculte_id">
                                    @foreach ($facultes as $faculte)
                                    <option value="{{$faculte->id}}">{{$faculte->nom}}</option>
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
@endsection