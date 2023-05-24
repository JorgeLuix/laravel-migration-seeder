@extends('layouts.app')

@section('content')

<main>
<h1>Treni in partenza oggi:</h1>
{{-- <a href="{{route('trains.index')}} "></a> --}}

<table>
    <thead>
        <tr>
            <th>Azienda</th>
            <th>Stazione di Partenza</th>
            <th>Stazione di Arrivo</th>
            <th>Orario di Partenza</th>
            <th>Orario di Arrivo</th>
            <th>Codice treno</th>
            <th>Numero Carrozze</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($trains as $train )

        <tr>
            <td>{{ $train->azienda }}</td>
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
