<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    protected $fillable = ['user_id', 'fournisseur_id', 'date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'achat_produits')->withPivot('quantite', 'prix_unitaire');
    }
}
