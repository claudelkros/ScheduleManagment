<?php

namespace App\Http\Controllers;

use App\Cour;
use App\Departement;
use App\Semestre;
use App\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ues = Cour::all();
        return view('ues.index', compact('ues'));
    }

    /**<
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $semestres = Semestre::all();
        $departements = Departement::all();
        return view('ues.create', compact('semestres', 'departements'));
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
        $this->validate($request,[
            'intitule' => 'required',
            'code' => 'required',
            'credits' => 'required',
        ]);

        $ue = new Cour();
        $ue->intitule = $request->input('intitule');
        $ue->code = $request->input('code');
        $ue->credits = $request->input('credits');
        $ue->semestre_id = $request->input('semestre_id');
        $ue->departement_id = $request->input('departement_id');
        $ue->save();

        return redirect('/ues')->with('success', 'Le cycle a été ajouté !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UE  $uE
     * @return \Illuminate\Http\Response
     */
    public function show(Cour $ues)
    {
        //
        $ues = Cour::all();
        return view('ues.show', compact('ues'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UE  $uE
     * @return \Illuminate\Http\Response
     */
    public function edit(Cour $uE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UE  $uE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UE $uE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UE  $uE
     * @return \Illuminate\Http\Response
     */
    public function destroy(UE $uE)
    {
        //
    }
}
