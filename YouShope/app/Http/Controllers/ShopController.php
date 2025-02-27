<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function shop()
    {
        $categorie = Categorie::all(); 
        $produit = Produit::all(); 

        return view('shop', compact('categorie', 'produit'));
    }
}
