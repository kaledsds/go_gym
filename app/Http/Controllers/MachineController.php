<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $machines = Machine::all();
        return view('machines.index', compact('machines'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Methods we can use on $request
        //guessExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName()
        //getClientOriginalExtension()
        //getClientMimeType()
        //guessClientExtension()
        //getSize()
        //getError()
        //isValid()
        $request->validate([
            'nom' => 'required',
            'type' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:5048',
        ]);

        $newImageName = time() . '-' . $request->nom . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $machine = new Machine([
            'nom' => $request->get('nom'),
            'type' => $request->get('type'),
            'image' => $newImageName
        ]);

        $machine->save();
        return redirect('/machines')->with('success', 'Le machine a été enregistré!');
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
        $machine = Machine::find($id);
        return view('machines.edit', compact('machine'));
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
        $machine = Machine::find($id);
        $machine->nom = $request->get('nom');
        $machine->type = $request->get('type');
        $machine->image = $request->get('image');
        $machine->save();
        return redirect('/machines')->with('success', 'Le machine a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $machine = Machine::find($id);
        $machine->delete();
        return redirect('/machines')->with('success', 'Le machine a été supprimé!');
    }
}
