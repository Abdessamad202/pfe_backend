<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $fillable = ['nom'];
    public function typesDeProduits()
    {
        return $this->hasMany(TypeProduit::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
