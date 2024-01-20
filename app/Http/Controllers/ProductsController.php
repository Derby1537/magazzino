<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Product::findByGiacenzaGreaterThan(0);
        $search = request('search');
        if($search != null && strlen($search) > 0) {
            $list = $list->intersect(Product::findByNome_prodottoContainingIgnoreCase($search));
        }
        return view('products.index', ['prodotti' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create([
            'nome_prodotto' => request('nome_prodotto'),
            'giacenza' => request('giacenza'),
            'prezzo' => request('prezzo'),
        ]);
        return view('success', ['azione1' => 'Inserisci', 'azione2' => 'inserito', 'azione3' => '']);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->nome_prodotto = request('nome_prodotto');
        $product->giacenza = request('giacenza');
        $product->prezzo = request('prezzo');
        $product->save();
        return view('success', ['azione1' => 'Modifica', 'azione2' => 'modificato', 'azione3' => '']);
    }

    public function delete($id) {
        $product = Product::findOrFail($id);
        return view('products.delete', compact('product'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return view('success', ['azione1' => 'Elimina', 'azione2' => 'eliminato', 'azione3' => '']);
    }

    public function buy($id) {
        $product = Product::findOrFail($id);
        return view('products.buy', compact('product'));
    }

    public function bought($id) {
        $product = Product::findOrFail($id);
        $product->giacenza = $product->giacenza - request('quantita');
        $product->save();
        return view('success', ['azione1' => 'Acquista', 'azione2' => 'acquistato', 'azione3' => 'Prezzo finale: €' . $product->prezzo * request('quantita')]);
    }
}
