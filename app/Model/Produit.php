<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{

    protected $guarded = [];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
