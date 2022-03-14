@extends('layout.template')

@section('center')
    <h1 class="text-center">Crea prodotto</h1>  

    <form action="{{route("welcome.store")}}" method="POST">
        
        @csrf

        <div class="form-group text-center">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror text-center" id="title" name="title" placeholder="Inserisci il nome del fumetto" value="{{old("title")}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group text-center">
            <label for="description">Descrizione</label>
            <textarea class="form-control text-center" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">{{old("description")}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group text-center">
            <label for="thumb">Url immagine</label>
            <input type="url" class="form-control text-center" id="thumb" name="thumb" placeholder="Inserisci Inserisci url immagine" value="{{old("thumb")}}">
        </div>

        <div class="form-group text-center">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control text-center" id="price" name="price" placeholder="Inserisci il prezzo" value="{{old("price")}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group text-center">
            <label for="series">Serie</label>
            <input type="text" class="form-control text-center" id="series" name="series" placeholder="Inserisci la serie del fumetto" value="{{old("series")}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group text-center">
            <label for="sale_date">In vendita a partire da</label>
            <input type="text" class="form-control text-center" id="sale_date" name="sale_date" placeholder="Inserisci la data dell'uscita del fumetto" value="{{old("sale_date")}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group text-center">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control text-center" id="type" name="type" placeholder="Inserisci di che articolo si tratta" value="{{old("type")}}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <span><a href="{{route("welcome.index")}}"><button type="button" class="btn btn-primary">Indietro</button></a></span>
            <span><button type="submit" class="btn btn-primary">Crea</button></span>
        </div>
        
    </form>
@endsection