@extends('index')

@section('body')
    <h3>Acquista {{$product->nome_prodotto}}</h3>
    Giacenza: {{$product->giacenza}} <br>
    Prezzo: €{{$product->prezzo}}
    <form action="/prodotti/{{$product->id}}/buy" method="POST">
        @csrf
        <label for="quantita">Quantità: </label>
        <input type="number" name="quantita" min="1" max="{{$product->giacenza}}" value="1"><br>
        <input type="submit" value="acquista">
    </form>
@endsection