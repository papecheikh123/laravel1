<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Produit;


class ProduitController extends Controller
{
    public function list_produit()
    {
        $produit=Produit::all();
        return view('liste',compact ('produit'));
    }
    public function ajouter_produit()
    {
        return view('ajouter');
    }

    public function ajouter_produit_traitement(Request $Request)
    {
        $Request->validate([
            'nom'      =>    'Required',
            'quantite' =>    'Required',
            'prix'      =>    'Required',
            'reference'=>    'Required',

        ]);

        $produit=new Produit();
        $produit->nom = $Request->nom;
        $produit->quantite = $Request->quantite;
        $produit->prix = $Request->prix;
        $produit->reference = $Request->reference;
        $produit ->save;

        return redirect('/ajouter')->with('status','le produit a été ajouté avec succes.');
    }
    public function update_produit($id)
    {
        $produits=Produit::find($id);
        return view('update', compact('produits'));
    }
    public function update_produit_traitement(Request $Request)
    {
        $Request->validate([
            'nom'      =>    'Required',
            'quantite' =>    'Required',
            'prix'      =>    'Required',
            'reference'=>    'Required',

        ]);
        $produit=Produit::find($Request->id);
        $produit->nom = $Request->nom;
        $produit->quantite = $Request->quantite;
        $produit->prix = $Request->prix;
        $produit->reference = $Request->reference;
        $produit ->update;
        return redirect('/produit')->with('status','le produit a été ajouté avec succes.');


    }


}

