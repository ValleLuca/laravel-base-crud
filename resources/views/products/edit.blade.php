@extends('layout.template')

@section('center')
    <h1 class="text-center">Modifica fumetto: {{$welcome->title}}</h1>
    <form action="{{route("welcome.update", $welcome->id)}}" method="POST" class="text-center">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control text-center" id="title" name="title" placeholder="Inserisci il nome del fumetto"  value="{{old("title")??$welcome->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control text-center" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">{{old("description")??$welcome->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="thumb">Url immagine</label>
            <input type="url" class="form-control text-center" id="thumb" name="thumb" placeholder="Inserisci Inserisci url immagine" value="{{old("thumb")??$welcome->thumb}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Tempo di cottura</label>
            <input type="number" class="form-control text-center" id="price" name="price" placeholder="Inserisci il prezzo" value="{{old("price")??$welcome->price}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control text-center" id="series" name="series" placeholder="Inserisci la serie del fumetto" value="{{old("series")??$welcome->series}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sale_date">In vendita a partire da</label>
            <input type="text" class="form-control text-center" id="sale_date" name="sale_date" placeholder="Inserisci la data dell'uscita del fumetto" value="{{old("sale_date")??$welcome->sale_date}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control text-center" id="type" name="type" placeholder="Inserisci di che articolo si tratta" value="{{old("type")??$welcome->type}}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <span><a href="{{route("welcome.index")}}"><button type="button" class="btn btn-primary">Indietro</button></a></span>
        <span><button type="submit" class="btn btn-success">Salva modifiche</button></span>
    </form>
@endsection