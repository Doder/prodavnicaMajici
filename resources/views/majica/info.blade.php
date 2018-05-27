@extends('layouts.master')
@section('content')
    
    
    
    <div class="row">
        <div class="col-4">
            <div class="box-white">
                <img src="/storage/{{$majica->slika}}" alt="majica" width="100%"/>
            </div>
        </div>
        <div class="col">
            <h2>{{$majica->naziv}}</h2>
            <h4>Opis:</h4>
            <p>{{$majica->opis}}</p>
        </div>
    </div>
    
    @auth
    
    @if (Auth::user()->admin)
    <br/>
    <form method="POST" action="/majice/{{$majica->id}}/delete">
    @csrf
    <button type="submit" class="btn btn-danger">Obrisi</button>
    </form>
    <br/>
    @endif
    @endauth
@endsection