@extends('layouts.master')

@section('content')

<h1>Dodaj novu majicu</h1>
<form method="POST" action="/majice" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="naziv" >Naziv: </label>
        <input type="text" id="naziv" name="naziv" >
    </div>
    <div class="form-group">
        <label for="opis">Opis: </label>
        <input type="text" id="opis" name="opis" >
    </div>
    <div class="form-gorup">
        <label for="slika">Slika: </label>
        <input type="file" name="slika" id="slika" accept=".jpg, .jpeg, .png">
    </div>
    <button type="submit" class="btn btn-primary">Dodaj</button>
</form>

@endsection