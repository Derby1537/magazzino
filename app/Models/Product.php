<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome_prodotto', 'giacenza', 'prezzo'];
    public static function findByGiacenzaGreaterThan($value) {
        return self::all()->filter(function($product) use ($value) {
            return $product->giacenza > $value;
        });
    }
    public static function findByNome_prodottoContainingIgnoreCase($substring) {
        return self::all()->filter(function($product) use ($substring) {
            return str_contains(strtolower($product->nome_prodotto), strtolower($substring));
        });
    }
    use HasFactory;
}
