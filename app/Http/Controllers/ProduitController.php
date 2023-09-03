<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048',
        ]);

        $newImageName = time() . '-' . $request->nom . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $produit = new produit([
            'nom' => $request->get('nom'),
            'stock' => $request->get('stock'),
            'description' => $request->get('description'),
            'prix' => $request->get('prix'),
            'image' => $newImageName
        ]);
        $produit->save();
        return redirect('/produits')->with('success', 'Le produit a été enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = produit::find($id);
        return view('produits.edit', compact('produit'));
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
        $request->validate([
            'nom' => 'required',
        ]);

        $newImageName = time() . '-' . $request->nom . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $produit = produit::find($id);
        $produit->nom = $request->get('nom');
        $produit->stock = $request->get('stock');
        $produit->description = $request->get('description');
        $produit->prix = $request->get('prix');
        $produit->image = $newImageName;
        $produit->save();
        return redirect('/produits')->with('success', 'Le produit a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = produit::find($id);
        $produit->delete();
        return redirect('/produits')->with('success', 'Le produit a été supprimé!');
    }
}
