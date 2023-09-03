<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;


class coachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachs = Coach::all();
        return view('coachs.index', compact('coachs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coachs = Coach::all();
        return view('coachs.create', compact('coachs'));
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

        $coach = new Coach([
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'datenais' => $request->get('datenais'),
            'tel' => $request->get('tel'),
            'cin' => $request->get('cin'),

        ]);
        $coach->save();
        return redirect('/coachs')->with('success', 'Le coach a été enregistré!');
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
        $coach = Coach::find($id);
        return view('coachs.edit', compact('coach'));
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
        $coach = Coach::find($id);
        $coach->nom = $request->get('nom');
        $coach->prenom = $request->get('prenom');
        $coach->datenais = $request->get('datenais');
        $coach->tel = $request->get('tel');
        $coach->cin = $request->get('cin');
        $coach->save();
        return redirect('/coachs')->with('success', 'Le coach a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coach = Coach::find($id);
        $coach->delete();
        return redirect('/coachs')->with('success', 'Le coach a été supprimé!');
    }
}
