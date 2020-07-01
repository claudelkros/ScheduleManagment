@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Duree des enseignements</div><br>
                @if (count($durees) > 0)
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cours</th>
                        <th scope="col">TP</th>
                        <th scope="col">TPE</th>
                        <th scope="col">TD</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col">EDITION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($durees as $duree)
                        <tr>
                            <th scope="row">{{$duree->id}}</th>
                            <td>{{$duree->cours}}</td>
                            <td>{{$duree->tp}}</td>
                            <td>{{$duree->tpe}}</td>
                            <td>{{$duree->td}}</td>
                            <td>{{$duree->total}}</td>
                            <td class="d-fex">
                                <a href="{{route('durees.edit', $duree->id)}}" class="btn btn-secondary">Editer</a>
                                <a href="#" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <div class="row">
                        <div class="col-10">
                            <p>Aucune duree enregistrer</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

