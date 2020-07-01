<?php

namespace App\Http\Controllers;

use App\Calendrier;
use App\Cour;
use App\Enseignant;
use App\Salle;
use App\Semestre;
use Illuminate\Http\Request;

class CalendrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $calendrier = Calendrier::all();
        return view('calendrier.index', compact('calendrier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $enseignants = Enseignant::all();
        $cours = Cour::all();
        $salles = Salle::all();
        $semestres = Semestre::all();
        return view('calendrier.create', compact('enseignants', 'cours', 'salles', 'semestres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'heure_debut' => 'required|different:heure_fin',
            'heure_fin' => 'required',
            'jour' => 'required',
            'nom_cour' => 'required',
            'nom_enseignant' => 'required',
            'nom_salle' => 'required',
            'semestre' => 'required',
        ]);

        $calendrier = new Calendrier();
        $calendrier->jour = $request->input('jour');
        $calendrier->nom_cour = $request->input('nom_cour');
        $calendrier->nom_enseignant = $request->input('nom_enseignant');
        $calendrier->semestre = $request->input('semestre');
        $calendrier->nom_salle = $request->input('nom_salle');
        $calendrier->heure_debut = $request->input('heure_debut');
        $calendrier->heure_fin = $request->input('heure_fin');
        $calendrier->save();

        return redirect('/calendrier')->with('success', 'Le niveau a été ajouté !!!');
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
        return view('calendrier.show');
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
        //
    }
}
