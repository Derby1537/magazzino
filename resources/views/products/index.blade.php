@extends('index')

@section('body')
    <h3>Ecco la lista dei prodotti nel database</h3>
    <form>
        <label for="search">Ricerca prodotto: </label>
        <input type="text" name="search"> <input type="submit" value="🔍"> <button type="button" onclick="window.location.href='/prodotti'">reset</button>
    </form>
    <button onclick="window.location.href='/prodotti/create'">Inserisci un nuovo prodotto</button>
    @foreach($prodotti as $prodotto)
        <p>
            - Nome prodotto: {{$prodotto->nome_prodotto}}
            <button onclick="window.location.href='/prodotti/{{$prodotto->id}}'">ℹ️ info</button>
        </p>
    @endforeach
@endsection