<?php

namespace App\Http\Controllers;

use App\Cycle;
use App\Departement;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cycles = Cycle::latest()->paginate(3);
        return view('cycles.index', compact('cycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements = Departement::all();
        return view('cycles.create', compact('departements'));
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
            'departement_id' => 'required',
        ]);

        $cycle = new Cycle();
        $departement_id_abre = $request->input('departement_id');
        $cycle_nom = $request->input('nom');
        $departement = Departement::where('id', $departement_id_abre)->value('abreviation');
        $cycle_abre = $cycle_nom . ' - ' .$departement;
        $cycle->departement_id = $departement_id_abre;
        $cycle->nom = $cycle_abre;
        $cycle->save();

        return redirect('/cycles')->with('success', 'Le cycle a été ajouté !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function show(Cycle $cycle)
    {
        return view('cycles.show', compact('cycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cycle $cycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cycle $cycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cycle  $cycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cycle $cycle)
    {
        //
    }
}
