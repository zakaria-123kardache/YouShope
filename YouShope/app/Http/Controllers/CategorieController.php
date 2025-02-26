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
        $categorie = Categorie::find($id);
        $categorie->delete();
        return redirect()->route('categorie');
    }
    public function update(Request $request)
    {
        $categorie = Categorie::find($request->categorie_id);
        $categorie->update([
            'name' => $request->name,
            'photo'=> $request->photo,
        ]);
        return redirect()->route('categorie');
    }
}
