<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    // protected $fillable =  ['taux'];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
