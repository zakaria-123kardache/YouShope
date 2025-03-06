<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\ProduitCommande;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommandeController extends Controller
{
    
    public function commande()
    {
        $commande = commande::all();
        return view('pages.commande', compact('commande'));
    }

    public function checkout(Request $request)
    {
        try {

            $produits = $request->input('produits');


            if (empty($produits)) {
                return response()->json(['message' => 'panier vide'], 400);
            }

            $prixtotal = 0;
            foreach ($produits as $produit) {
                $prixtotal += $produit['prix'] * $produit['quantite'];
            }

            $commande = Commande::create([
                'status' => 'encoure',
                'date' => now(),
                'prixtotal' => $prixtotal,
                'user_id' => auth()->id() ?? 1,
                'payment_id' => null,
            ]);

            foreach ($produits as $produit) {
                ProduitCommande::create([
                    'produit_id' => $produit['id'],
                    'commande_id' => $commande->id,
                    'quantite' => $produit['quantite'],
                    'prix' => $produit['prix'],
                ]);
            }

            return response()->json([
                'message' => 'Commande saved',
                'commande_id' => $commande->id
            ]);
        } catch (\Exception $e) {
            Log::error('Erreur : ' . $e->getMessage());

            return response()->json([
                'message' => 'Erreur trmnt commande',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function annulerCommande($id)
    {
        $commande = Commande::find($id);
        $commande->annulerCommande();
        return redirect()->route('');
    }
}
