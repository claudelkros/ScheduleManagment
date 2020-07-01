@extends('adminlte::page')

@section('content')
    <div class="container">
        @if (count($semestres) > 0)
            @foreach ($semestres as $semestre)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$semestre->nom}}</h5>
                    <p class="card-text">{{$semestre->niveau->nom}}</p>
                  <a href="{{route('semestres.show', $semestre->id)}}" class="card-link">Detail</a>
                </div>
              </div>
              <div class="d-flex mt-2 align-items-center">
                  {{$semestres->links()}}
              </div>
            @endforeach
        @else
            <p>Aucun semestre enregistrer dans la base des données</p>
        @endif
    </div>
@endsection
