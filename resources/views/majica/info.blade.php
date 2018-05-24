@extends('layouts.master')
@section('content')
    
    <h1>{{$majica->naziv}}</h1>
    <h2>{{$majica->opis}}</h2>
    <div>
    <img src="/storage/{{$majica->slika}}" alt="majica" width="500px"/>
    </div>
    @auth
    <form method="POST" action="/majice/{{$majica->id}}/delete">
    @csrf
    <button type="submit" class="btn btn-danger">Obrisi</button>
    </form>
    @endauth
@endsection