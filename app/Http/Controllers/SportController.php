<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;
use App\Models\Sport;

class sportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports = Sport::join('coaches', 'coaches.id', '=', 'sports.coach_id')
            ->get([
                'sports.id',
                'sports.nom',
                'sports.time',
                'coaches.nom as coach_nom',
                'coaches.prenom as coach_prenom',
            ]);
        return view('sports.index', compact('sports'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coachs = Coach::all();
        return view('sports.create', compact('coachs'));
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
        ]);

        $sport = new Sport([
            'nom' => $request->get('nom'),
            'time' => $request->get('time'),
            'coach_id' => $request->get('coach_id'),
        ]);
        $sport->save();
        return redirect('/sports')->with('success', 'Le sport a été enregistré!');
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
        $sport = Sport::find($id);
        $coachs = Coach::all();
        return view('sports.edit', compact('coachs', 'sport'));
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
        $sport = Sport::find($id);
        $sport->nom = $request->get('nom');
        $sport->time = $request->get('time');
        $sport->coach_id = $request->get('coach_id');
        $sport->save();
        return redirect('/sports')->with('success', 'Le sport a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sport = Sport::find($id);
        $sport->delete();
        return redirect('/sports')->with('success', 'Le sport a été supprimé!');
    }
}
