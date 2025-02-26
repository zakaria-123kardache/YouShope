<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function categorie ()
    {
        $categorie = Categorie::all();
        return view('pages.categorie',compact('categorie'));
    }
    public function create(Request $request)
    {
        Categorie::create([
            'name' => $request['name'],
            'photo' => $request['photo'], 
        ]);
        return redirect()->route('categorie');
    }
    public function delete($id)
    {
        $produit = Categorie::find($id);
        $produit->delete();
        return redirect()->route('categorie');
    }
    public function update(Request $request)
    {
        $produit = Categorie::find($request->categorie_id);
        $produit::categorie([
            'name' => $request->name,
            'photo'=> $request->photo,
        ]);
    }
}
