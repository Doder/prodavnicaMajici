@extends('layouts.master')
@section('content')
    <div class="container container-with-margin">
    <div class="row">
    @foreach ($majice as $majica)
        
        <div class="col-3 shirt-box">
            
            <div class="image-container">
            <a href="majice/{{$majica->id}}"><img width="100%" src="/storage/{{$majica->slika}}" alt="{{$majica->naziv}}"></a>
            </div>
            <div class="image-title">
                <div class="title">
                    <h5>{{$majica->naziv}}</h5>
               </div>
                <div class="shirt-price">
                    <p>{{$majica->cijena}}€</p>
                </div>
            </div>
        </div> 

    @endforeach
    </div>
    </div>
@endsection