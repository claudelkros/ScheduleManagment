<?php

namespace App\Http\Controllers;

use App\Duree;
use Illuminate\Http\Request;

class DureeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $durees = Duree::latest()->paginate(4);
        return \view('durees.index', \compact('durees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('durees.create');
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
            'cours' => 'required',
            'tp' => 'required',
            'tpe' => 'required',
            'td' => 'required',
            'total' => 'required',
        ]);

        $duree = new Duree();
        $duree->cours = $request->input('cours');
        $duree->tp = $request->input('tp');
        $duree->tpe = $request->input('tpe');
        $duree->td = $request->input('td');
        $duree->total = $request->input('total');
        $duree->save();

        return \redirect('durees')->with('success', 'La duree a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function show(Duree $duree)
    {
        return \view('durees.show', \compact('duree'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function edit(Duree $duree)
    {
        return \view('durees.edit', \compact('duree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duree $duree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Duree  $duree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duree $duree)
    {
        //
    }
}
