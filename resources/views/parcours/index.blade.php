@extends('adminlte::page')

@section('content')
    <div class="container">
        @if (count($parcours) > 0)
            @foreach ($parcours as $parcour)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$parcour->nom}}</h5>
                    <p class="card-text">{{$parcour->nom}}</p>
                  <a href="{{route('parcours.show', $parcour->id)}}" class="card-link">Detail</a>
                </div>
              </div>
              <div class="d-flex mt-2 align-items-center">
                  {{$parcours->links()}}
              </div>
            @endforeach
        @else
            <p>Aucun parcour enregistrer dans la base des données</p>
        @endif
    </div>
@endsection
