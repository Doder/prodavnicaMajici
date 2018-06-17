@extends('layouts.master')

@section('content')
<div class="container container-with-margin">
    <h1>Dodaj novu majicu</h1>
    <div class="box-white half-size">
    <form method="POST" action="/majice" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="naziv" >Naziv: </label>
            <input required type="text" id="naziv" name="naziv" class="form-control">
        </div>
        <div class="form-group">
            <label for="cijena" >Cijena: </label>
            <div class="input-group">
            <input required type="number" id="cijena" name="cijena" class="form-control" min="0" value="0" step=".01">
            <div class="input-group-prepend">
            <div class="input-group-text">€</div>
            </div>
        </div>
        </div>
        <div class="form-group">
            <label for="opis">Opis: </label>
            <input required type="text" id="opis" name="opis" class="form-control" >
        </div>
        <div class="form-gorup">
            <label for="slika">Slika: </label>
            <input required type="file" name="slika" id="slika" accept=".jpg, .jpeg, .png" class="form-control">
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
    </div>
</div>
@endsection