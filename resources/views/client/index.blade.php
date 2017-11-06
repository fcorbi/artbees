@extends('layout.baseWithHeader')
@section('content')
    <h3>Clients</h3>
    <table class="table">
        <thead>
        <th>Name</th>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <td>{{ $client['name'] }}</td>
        @endforeach
        </tbody>
    </table>
@endsection()