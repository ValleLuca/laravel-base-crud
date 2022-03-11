@extends('layout.template')

@section('center')
    <table class="table table-bordered border-primary">
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
                <tr class="text-center">
                    <th scope="row">{{$esempio->id}}</th>
                    <td class="align-middle">{{$esempio->title}}</td>
                    <td class="align-middle">{{$esempio->description}}</td>
                    <td class="align-middle"><img src="{{$esempio->thumb}}"></td>
                    <td class="align-middle">{{$esempio->price}}</td>
                    <td class="align-middle">{{$esempio->series}}</td>
                    <td class="align-middle">{{$esempio->sale_date}}</td>
                    <td class="align-middle">{{$esempio->type}}</td>
                
                    <td class="align-middle">
                        <a href="{{route("welcome.show", $esempio->id)}}"><button type="button" class="btn btn-primary mt-1">Vedi</button></a>
                        <a href="{{route("welcome.edit", $esempio->id)}}"><button type="button" class="btn btn-warning mt-1">Modifica</button></a>
                        <form action="{{route("welcome.destroy", $esempio->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger mt-1">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <div class="text-center m-1">
            <a href="{{route("welcome.create", $esempio->id)}}"><button type="button" class="btn btn-success">Aggiungi</button></a>
        </div>
    </table>
@endsection