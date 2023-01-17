@extends('layouts.app')

@section('titolo-pagina',"Migration-Seeder")

@section('contenuto-main')


@foreach ($trains as $elem)
<h2>{{ $elem['Departure_City'] }}</h2>
@endforeach

@endsection
