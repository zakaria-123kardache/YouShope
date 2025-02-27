<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        $categorie = Categorie::all(); 
        $produit = Produit::all(); 

        return view('home', compact('categorie', 'produit'));
    }
}
