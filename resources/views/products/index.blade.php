@extends('layout.template')

@section('center')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">thumb</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($example as $esempio)
                <tr>
                    <th scope="row">{{$esempio->id}}</th>
                    <td>{{$esempio->title}}</td>
                    <td>{{$esempio->description}}</td>
                    <td><img src="{{$esempio->thumb}}"></td>
                    <td>{{$esempio->price}}</td>
                    <td>{{$esempio->series}}</td>
                    <td>{{$esempio->sale_date}}</td>
                    <td>{{$esempio->type}}</td>
                </tr>
                <td>
                    <a href="{{route("welcome.show", $esempio->id)}}"><button type="button" class="btn btn-primary">Vedi</button></a>
                    <a href="{{route("welcome.edit", $esempio->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                    <form action="{{route("welcome.destroy", $esempio->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Cancella</button>
                    </form>
            @endforeach
        </tbody>
    </table>
@endsection