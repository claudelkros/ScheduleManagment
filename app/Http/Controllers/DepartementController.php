<?php

namespace App\Http\Controllers;
use App\Faculte;
use App\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements = Departement::latest()->paginate(6);
        return view('departements.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultes = Faculte::all();
        return view('departements.create', compact('facultes'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        //validation des données
        $this->validate($request, [
            'nom' => 'required',
            'abreviation' => 'required',
        ]);

        //create a new departement
        $departement = new Departement();
        $departement->nom = $request->input('nom');
        $departement->abreviation = $request->input('abreviation');
        $departement->faculte_id = $request->input('faculte_id');
        $departement->user_id = auth()->user()->id;
        $departement->save();

        return redirect('/departements')->with('success', 'Le département a été ajouté !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Departement $departement)
    {
        return view('departements.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departement  $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departement $departement)
    {
        //
    }
}
