@extends('adminlte::page')

@section('content')
    <div class="container">
        @if (count($cycles) > 0 )
            <div class="row">
                @foreach ($cycles as $cycle)
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                        <h5 class="card-title">{{$cycle->departement->nom}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$cycle->nom}}</h6>
                        <a href="{{route('cycles.show', $cycle->id)}}" class="card-link">Detail</a>
                        </div>
                    </div>
                @endforeach
                {{$cycles->links()}}
            </div>
        @else
            <p>Aucun enregistrement dans la base des données</p>
        @endif
    </div>
@endsection
