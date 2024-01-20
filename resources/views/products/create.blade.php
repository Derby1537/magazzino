@extends('index')
@section('body')
    <h3>Inserisci un nuovo prodotto</h3>    
    <form action="/prodotti" method="POST">
        @csrf
        <label for="nome_prodotto">Nome prodotto: </label>
        <input type="text" name="nome_prodotto"> <br>
        <label for="giacenza">Giacenza: </label>
        <input type="number" name="giacenza" min="1"> <br>
        <label for="prezzo">Prezzo: €</label>
        <input type="number" name="prezzo" min="0.01" step="0.01"> <br>
        <input type="submit" value="inserisci">
    </form>
@endsection