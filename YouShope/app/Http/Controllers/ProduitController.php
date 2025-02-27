<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //

    public function home()
{
    $produit = Produit::all();
    return view('home', compact('produit'));
}

    public function produit()
    {
        $produit = Produit::all();
        $categories = Categorie::all(); 
        return view('pages.produit', compact('produit','categories'));
    }
    public function create(Request $request)
    {
        Produit::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'photo' => $request['photo'],
            'prix' => $request['prix'],
            'categorie_id' => $request['categorie_id'],
        ]);

        return redirect()->route('produit');
    }
    public function delete($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('produit');
    }
    public function update(Request $request)
    {
        $produit =Produit::find($request->produit_id);
        $produit->update([
            'name' => $request->name,
            'description' => $request->description,
            'prix'  => $request->prix,
            'photo'  => $request->photo,
            'categorie_id' => $request->categorie_id,
        ]);
        return redirect()->route('produit');
    }

}
