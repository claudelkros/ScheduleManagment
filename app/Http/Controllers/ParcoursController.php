<?php

namespace App\Http\Controllers;

use App\Niveau;
use App\Parcours;
use Illuminate\Http\Request;

class ParcoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcours = Parcours::orderBy('created_at', 'asc')->paginate(4);
        return view('parcours.index', compact('parcours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveaux = Niveau::all();
        return view('parcours.create', compact('niveaux'));
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
            'niveau_id' => 'required',
        ]);

        $parcour = new Parcours();
        $parcour->nom = $request->input('nom');
        $parcour->niveau_id = $request->input('niveau_id');
        $parcour->save();

        return redirect('parcours')->with('success', 'Le parcours a été ajouté avec success !!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcours  $parcour
     * @return \Illuminate\Http\Response
     */
    public function show(Parcours $parcour)
    {
        return view('parcours.show', compact('parcour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parcours  $parcours
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcours $parcours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parcours  $parcours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcours $parcours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parcours  $parcours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcours $parcours)
    {
        //
    }
}
