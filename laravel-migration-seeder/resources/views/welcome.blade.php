@extends('layouts.app')

@section('titolo-pagina', 'Migration-Seeder')

@section('contenuto-main')

    <div class="container p-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Train_Id</th>
                    <th scope="col">Departure_City</th>
                    <th scope="col">Arrivals_City</th>
                    <th scope="col">Time_Departure</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $elem)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $elem['id'] }}</td>
                        <td>{{ $elem['Train_Id'] }}</td>
                        <td>{{ $elem['Departure_City'] }}</td>
                        <td>{{ $elem['Arrivals_City'] }}</td>
                        <td>{{ $elem['Time_Departure'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
