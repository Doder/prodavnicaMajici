
@extends('layouts.master')

@section('content')

<div class="container container-with-margin">
    <h1>Korpa</h1>
    <ul class="list-group">
    @foreach ($results as $r)

    <li class="list-group-item price-item">
    {{$r->kolicina}} x {{$r->naziv}}
        <span class="right-price"> 
            {{$r->cijena}}€ <button class="btn btn-danger obrisi" onclick="obrisiIzKorpe({{$r->id}});">Obrisi iz korpe</button>
        </span>
    </li>

    @endforeach
    </ul>
    <span class="total">Ukupno: {{$ukupno}}€</span>
</div>
@endsection