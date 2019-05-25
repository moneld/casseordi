<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    protected $guarded = [];

    public function produits(){
        return $this->hasMany(Produit::class);
    }
}
