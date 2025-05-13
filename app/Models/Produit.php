<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['nom', 'prix'];

    public function typeProduit()
    {
        return $this->belongsTo(TypeProduit::class);
    }

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function achats()
    {
        return $this->belongsToMany(Achat::class, 'achat_produits')->withPivot('quantite', 'prix_unitaire');
    }
    public function ventes()
    {
        return $this->belongsToMany(Vente::class, 'vente_produits')->withPivot('quantite', 'prix_unitaire');
    }
    public function tvs()
    {
        return $this->hasMany(Tv::class);
    }
}
