<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password', 'role'];
    public function marques()
    {
        return $this->hasMany(Marque::class);
    }
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
    public function typesDeProduits()
    {
        return $this->hasMany(TypeProduit::class);
    }

    public function achats()
    {
        return $this->hasMany(Achat::class);
    }
    public function ventes()
    {
        return $this->hasMany(Vente::class);
    }
    // public function stocks()
    // {
    //     return $this->hasMany(Stock::class);
    // }
}
