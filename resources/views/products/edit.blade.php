@extends('index')
@section('body')
    <h3>Modifica {{$product->nome_prodotto}}</h3>
    <form action="/prodotti/{{$product->id}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nome_prodotto">Nome prodotto: </label>
        <input type="text" name="nome_prodotto" value="{{$product->nome_prodotto}}"> <br>
        <label for="giacenza">Giacenza: </label>
        <input type="number" name="giacenza" min="1" value="{{$product->giacenza}}"> <br>
        <label for="prezzo">Prezzo: €</label>
        <input type="number" name="prezzo" min="0.01" step="0.01" value="{{$product->prezzo}}"> <br>
        <input type="submit" value="modifica">
    </form>
@endsection