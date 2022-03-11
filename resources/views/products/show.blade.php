@extends('layout.template')

@section('center')

    <h1>{{$example->title}}</h1>
    <p>{{$example->description}}</p>
    <img src="{{$example->thumb}}">

    {{-- <form action="{{route("welcome.destroy", $example->id)}}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">Cancella</button>
    </form> --}}

    <a href="{{route("welcome.index")}}"><button type="button" class="btn btn-primary">Indietro</button></a>

        
@endsection