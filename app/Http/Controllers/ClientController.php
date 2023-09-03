<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Coach;
use App\Models\Sport;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::join('sports', 'sports.id', '=', 'clients.sport_id')
            ->get([
                'clients.id',
                'clients.nom',
                'clients.prenom',
                'clients.datenais',
                'clients.tel',
                'clients.cin',
                'sports.nom as sport_nom',
            ]);
        return view('clients.index', compact('clients'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports = Sport::all();
        return view('clients.create', compact('sports'));
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
            'prenom' => 'required'
        ]);

        $client = new Client([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'datenais' => $request->get('datenais'),
            'tel' => $request->get('tel'),
            'cin' => $request->get('cin'),
            'sport_id' => $request->get('sport_id'),
        ]);
        $client->save();
        return redirect('/clients')->with('success', 'Le client a été enregistré!');
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
        $client = Client::find($id);
        $sports = Sport::all();
        return view('clients.edit', compact('client', 'sports'));
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
            'prenom' => 'required'
        ]);
        $client = Client::find($id);
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->datenais = $request->get('datenais');
        $client->tel = $request->get('tel');
        $client->cin = $request->get('cin');
        $client->sport_id = $request->get('sport_id');
        $client->save();
        return redirect('/clients')->with('success', 'Le client a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('success', 'Le client a été supprimé!');
    }
}
