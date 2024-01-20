@extends('index')
@section('body')
    <h3>Elimina {{$product->nome_prodotto}}</h3>
    <form action="/prodotti/{{$product->id}}" method="POST">
        @csrf
        @method('DELETE')
        <p>Sei sicuro di voler eliminare questo prodotto?</p>
        <input type="submit" value="si"> <button type="button" onclick="window.location.href='/prodotti'">no</button>
    </form>
@endsection