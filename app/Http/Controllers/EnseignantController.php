<?php

namespace App\Http\Controllers;

use App\Cour;
use App\Departement;
use App\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enseignants = Enseignant::latest()->paginate(6);
        return view('enseignants.index', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements = Departement::all();
        $cours = Cour::select('intitule')->where('departement_id', 1)->get();

        return view('enseignants.create', compact('departements', 'cours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request,[
                'nom' => 'required',
                'prenom' => 'required',
                'grade' => 'required',
                'matricule' => 'required',
            ]);

            $enseignant = new Enseignant();
            $enseignant->nom = $request->input('nom');
            $enseignant->prenom = $request->input('prenom');
            $enseignant->grade = $request->input('grade');
            $enseignant->matricule = $request->input('matricule');
            $enseignant->save();

            return redirect('/enseignants')->with('success', 'Le cycle a été ajouté !!!');

        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignant $enseignant)
    {
        $enseignant = Enseignant::all();
       return view('enseignants.show', compact('enseignant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.edit', compact('enseignant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
    {
        //
    }
}
