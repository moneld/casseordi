<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function accueil(){
       $produits = Produit::all();
        return view('frontend.welcome')->with(['produits' => $produits]);
    }

    public function connexion(){
        return view('backend.login');
    }

    public function motDePasseOublie(){
        return view('backend.forget-password');
    }
    public function detailProduit($id){
        $produits = Produit::where('id',$id)->get();

        return view('frontend.detail-produit')->with(['produits' => $produits]);
    }

}
