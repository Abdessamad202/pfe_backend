<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class VenteProduit extends Pivot
{
    protected $table = 'vente_produits';

    protected $fillable = ['vente_id', 'produit_id', 'quantite', 'prix_unitaire'];
}
