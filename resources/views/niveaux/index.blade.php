@extends('adminlte::page')

@section('content')
    <div class="container">
        <ul class="list-group">
            @if (count($niveaux) > 0)
                @foreach ($niveaux as $niveau)
                    <li class="list-group-item">{{$niveau->nom}}</li>
                    <li class="list-group-item">{{$niveau->nom}}</li>
                @endforeach
            @else
                <p>Aucun niveau enregistrement dans la base des données</p>
            @endif
          </ul>
    </div>
@endsection
