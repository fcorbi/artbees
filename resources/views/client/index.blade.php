@extends('layout.baseWithHeader')
@section('content')
    <h3>Clients</h3>
    <table class="table">
        <thead>
        <th>Name</th>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client['name'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if($page > 0)
        <a href="{{route("clients", ["page" => $page - 1])}}">Previous</a>
    @endif
    @if($showNext)
        <a href="{{route("clients", ["page" => $page + 1])}}">Next</a>
    @endif
@endsection