@extends('index')
@section('body')
    <h3>Prodotto {{$product->nome_prodotto}}</h3>
    <p>
         - Nome prodotto: {{$product->nome_prodotto}}
    </p>
    <p>
         - Giacenza: {{$product->giacenza}}
    </p>
    <p>
         - Prezzo: €{{$product->prezzo}}
    </p>
    <button onclick="window.location.href='/prodotti/{{$product->id}}/buy'">🛒 compra</button><br>
    <button onclick="window.location.href='/prodotti/{{$product->id}}/edit'">✏️ modifica</button>
    <button onclick="window.location.href='/prodotti/{{$product->id}}/delete'">❌ elimina</button><br><br>
@endsection