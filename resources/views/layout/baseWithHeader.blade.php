@extends('layout.base')
@section('header')
    <div class="pull-right">
        <a href="{{route('clients')}}"/>Clients</a> |
        <a href="{{route('clientCreateGet')}}">Add Client</a>
    </div>
@endsection()