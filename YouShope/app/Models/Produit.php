<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'prix',
        'description',
        'categorie_id',
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function produitCommandes()
    {
        return $this->hasMany(ProduitCommande::class);
    }
}
