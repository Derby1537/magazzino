@extends('index')
@section('body')
    <h3>{{$azione1}} prodotto</h3>
    <p>
        Prodotto {{$azione2}} con successo!
    </p>
    <p>
        {{$azione3}}
    </p>
    <button onclick="window.location.href='/prodotti'">Lista dei prodotti</button>
@endsection