@extends('layouts.master')
@section('content')

<div class="row">
        
    @foreach ($majice as $majica)
        <div class="col-md-3">
            <div >
                <img class="img img-responsive" src="{{ asset('img/item1.png') }}">
            </div>
            <div>
                <h2>{{ $majica->naziv }}</h2>
            </div>
        </div>    
    <!--}<li><a href="majice/{{$majica->id}}">{{ $majica->naziv }}</a></li>-->
    @endforeach
</div>
@endsection