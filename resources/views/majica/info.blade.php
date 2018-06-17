@extends('layouts.master')
@section('content')
    
<div class="container container-with-margin">
    
    <div class="row">
        <div class="col-4">
            <div class="box-white">
                <img src="/storage/{{$majica->slika}}" alt="majica" width="100%"/>
            </div>
        </div>
        <div class="col">
            <h2>{{$majica->naziv}}</h2>
            <hr/>
            <h4>Cijena:</h4>
            <p>{{$majica->cijena}}€</p>
            <h4>Opis:</h4>
            <p>{{$majica->opis}}</p>
        </div>
    </div>
    
    @auth
    <br/>
    <div class="row justify-content-start">
        <div class="col-3">
        <form method="POST" action="/korpa/{{$majica->id}}">
    @csrf
    <div class="input-group">
        <input type="number" class="form-control" value="1" name="kolicina" id="kolicina">
        <div class="input-group-append">
            <button class="btn btn-primary inline-btns">Dodaj u korpu</button>
        </div>
    </div>
    
    </form>
        </div>
        <div class="col-2">
        @if (Auth::user()->admin)
    <form method="POST" action="/majice/{{$majica->id}}/delete">
    @csrf
    <button type="submit" class="btn btn-danger inline-btns">Obrisi</button>
    </form>
    
    @endif
        </div>
    </div>
    <br/>
    


    @endauth
</div>
@endsection