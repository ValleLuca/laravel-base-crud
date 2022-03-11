@extends('layout.template')

@section('center')

    <h1>{{$welcome->title}}</h1>
    <p>{{$welcome->description}}</p>
    <img src="{{$welcome->thumb}}">

    <form action="{{route("welcome.destroy", $welcome->id)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">Cancella</button>
    </form>

    <a href="{{route("welcome.index")}}"><button type="button" class="btn btn-primary">Indietro</button></a>

        
@endsection