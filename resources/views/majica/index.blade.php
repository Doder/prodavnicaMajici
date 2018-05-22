@extends('layouts.master')
@section('content')
    @foreach ($majice as $majica)
        <li><a href="majice/{{$majica->id}}">{{ $majica->naziv }}</a></li>
    @endforeach
    </ul>
@endsection