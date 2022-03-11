@extends('layout.template')

@section('center')
    <h1>Modifica fumetto: {{$example->title}}</h1>
    <form action="{{route("welcome.update", $example->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del fumetto" value="{{$example->title}}">
        </div>
        
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">{{$example->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Url immagine</label>
            <input type="url" class="form-control" id="thumb" name="thumb" placeholder="Inserisci Inserisci url immagine" value="{{$example->thumb}}">
        </div>

        <div class="form-group">
            <label for="price">Tempo di cottura</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$example->price}}">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto" value="{{$example->series}}">
        </div>

        <div class="form-group">
            <label for="sale_date">In vendita a partire da</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data dell'uscita del fumetto" value="{{$example->sale_date}}">
        </div>

        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci di che articolo si tratta" value="{{$example->type}}">
        </div>

        
        <button type="submit" class="btn btn-primary">Salva modifiche</button>

    </form>
@endsection