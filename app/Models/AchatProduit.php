<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AchatProduit extends Pivot
{
    protected $table = 'achat_produits';

    protected $fillable = ['achat_id', 'produit_id', 'quantite', 'prix_unitaire'];
}
