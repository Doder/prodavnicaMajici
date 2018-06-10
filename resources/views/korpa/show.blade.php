
@extends('layouts.master')

@section('content')

<h1>Korpa</h1>
<ul class="list-group">
@foreach ($results as $r)

<li class="list-group-item price-item">{{$r->naziv}} <span class="right-price"> {{$r->cijena}}€</span></li>

@endforeach
</ul>
<span class="total">Ukupno: {{$ukupno}}€</span>
@endsection