<?php

namespace App\Http\Controllers;

use App\Salle;
use App\Faculte;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles = Salle::orderBy('faculte_id', 'desc')->paginate(6);
        return view('salles.index', compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultes = Faculte::all();
        return \view('salles.create', \compact('facultes'));
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
            'lieu' => 'required',
            'faculte_id' => 'required',
        ]);

        $salle = new Salle();
        $salle->nom = $request->input('nom');
        $salle->lieu = $request->input('lieu');
        $salle->faculte_id = $request->input('faculte_id');
        $salle->save();

        return \redirect('salles')->with('success', 'La salle a été ajouté !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salle  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Salle $room)
    {
        $salle = Salle::find($room);
        return view('salles.show', \compact('salle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function edit(Salle $salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salle $salle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salle $salle)
    {
        $salle_sup = Salle::find($salle);
        $salle_sup->delete();
        return \redirect('salles')->with('success', 'La salle a été supprimé !!!');

    }
}
