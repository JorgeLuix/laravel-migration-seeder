@extends('layouts.app')

@section('content')

<main>
<h1>Treni in partenza oggi:</h1>
<a href="{{route('trains.index')}} "> Tutti treni</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Stazione di Arrivo</th>
            <th scope="col">Orario di Partenza</th>
            <th scope="col">Orario di Arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero Carrozze</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($trains as $train )

        <tr>
            <td scope="row">{{ $train->azienda }}</td>
            <td>{{$train->stazione_partenza}}</td>
            <td>{{$train->stazione_arrivo}}</td>
            <td>{{$train->orario_partenza}}</td>
            <td>{{$train->orario_arrivo}}</td>
            <td>{{$train->codice_treno}}</td>
            <td>{{$train->numero_carroze}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
</main>

@endsection
