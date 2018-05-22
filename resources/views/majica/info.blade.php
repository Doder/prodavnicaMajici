@extends('layouts.master')
@section('content')
    <h1>{{$majica->naziv}}</h1>
    <h2>{{$majica->opis}}</h2>
    <img src="/img/{{$majica->slika}}" alt="majica" width="500px"/>
@endsection