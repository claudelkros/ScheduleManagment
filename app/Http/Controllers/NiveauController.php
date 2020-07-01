<?php

namespace App\Http\Controllers;

use App\Cycle;
use App\Niveau;
use App\Departement;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveaux = Niveau::latest()->paginate(3);
        return view('niveaux.index', compact('niveaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $cycles = Cycle::all(); 
        return view('niveaux.create', compact('cycles'));      
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'cycle_id' => 'required|integer',
        ]);
        
        $niveau = new Niveau();
        $niveau->nom = $request->input('nom');
        $niveau->cycle_id = $request->input('cycle_id');
        $niveau->save();

        return redirect('niveaux')->with('success', 'Le niveau a été ajouté !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function show(Niveau $niveau)
    {
        return view('niveaux.show', compact('niveau'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        $cycles = Cycle::all();
        return view('niveaux.edit', compact([
            'niveau' => $niveau,
            'cycles' => $cycles,
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
    {
        //
    }
}
