<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function accueil(){
       $produits = DB::table('produits')
           ->orderBy('created_at','desc')
           ->limit(10)
           ->get();

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

    public function boutique(){
        $produits = DB::table('produits')->paginate(10);
        return view('frontend.boutique')->with(['produits' => $produits]);
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function apropos(){
        return view('frontend.apropos');
    }

}
