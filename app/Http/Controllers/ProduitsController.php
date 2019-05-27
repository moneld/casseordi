<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use App\Model\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = DB::table('produits')
            ->orderBy('created_at','desc')
            ->get();
        $categories = Categorie::select('nom','id')->get();
        foreach ($categories as $categorie)
        {
            foreach ($produits as $produit){
                if ($categorie->id === $produit->categorie_id){
                    $produit->categorie = $categorie->nom;
                }
            }
        }


        return view('backend.produits.index')->with(['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::select('nom','id')->get();
        return view('backend.produits.create')->with(['categories' =>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'nom' => 'required',
            'prix' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:10000',
            'description' => 'required',
        ]);

        $req = $request->except('image');
        $image = $request->image;

        $imageName = $image->getClientOriginalName();
        $image->move('images/produits-images',$imageName);
        $req['image'] = $imageName;

        Produit::create([
            'nom' => $req['nom'],
            'description' => $req['description'],
            'detail' => $req['detail'],
            'prix' => $req['prix'],
            'image_produit' => $req['image'],
            'categorie_id' => $req['categorie_id'],
        ]);
        return redirect()->route('produit.index')->with('status', 'Le produit a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $produit = Produit::find($id);

        $imagePath = public_path('images/produits-images/'.$produit->image_produit);

        if (File::exists($imagePath)){
            File::delete($imagePath);
        }
        $produit->delete();
        return back()->with('status','Le produit a bien été supprimé.');
    }

    public function supprimer($id)
    {

    }
}
