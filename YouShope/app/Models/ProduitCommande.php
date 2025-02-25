<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitCommande extends Model
{
    use HasFactory;

    protected $fillable = ['produit_id', 'commande_id', 'quantite', 'prix'];
    
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
    
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}
