<?php

namespace App\Http\Controllers;

use App\Faculte;
use Illuminate\Http\Request;

class FaculteController extends Controller
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
        $facultes = Faculte::latest()->paginate(4);
        return view('facultes.index', compact('facultes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facultes.create');
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
            'abreviation' => 'required',
            'responsable' => 'required',
            'logo' => 'image|nullable|max:1999'
        ]);

        //upload de logo
        if($request->hasFile('logo')){
            $filenameExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('public/img', $fileNameStore);
        }else{
            $fileNameStore = "default.jpg";
        }

        $faculte = new Faculte();
        $faculte->nom = $request->input('nom');
        $faculte->abreviation = $request->input('abreviation');
        $faculte->responsable = $request->input('responsable');
        $faculte->user_id = auth()->user()->id;
        if($request->hasFile('logo')){
            $faculte->logo = $fileNameStore;
        }
        $faculte->save();

        return redirect('facultes')->with('success', 'La faculté a été ajouté !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function show(Faculte $faculte)
    {
        //$departements = Departement::whereIn('faculte');

        return view('facultes.show', compact([
            'faculte' => $faculte,
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculte $faculte)
    {
        $faculty = Faculte::find($faculte);
        return view('facultes.edit', \compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculte $faculte)
    {
        $this->validate($request, [
            'nom' => 'required',
            'abreviation' => 'required',
            'responsable' => 'required',
            'logo' => 'image|nullable|max:1999'
        ]);

        //upload de logo
        if($request->hasFile('logo')){
            $filenameExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('public/img', $fileNameStore);
        }else{
            $fileNameStore = "default.jpg";
        }

        $faculty = Faculte::find($faculte);
        $faculty->nom = $request->input('nom');
        $faculty->abreviation = $request->input('abreviation');
        $faculty->responsable = $request->input('responsable');
        $faculty->logo = $request->input('logo');
        $faculty->user_id = auth()->user()->id;
        $faculty->save();

        return redirect('facultes')->with('success', 'La faculté a été modifié !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculte  $faculte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculte $faculte)
    {
        $faculty = Faculte::find($faculte);
        if($faculty->logo != 'default.jpg'){
            Storage::delete('public/img/'.$faculty->logo);
        }
        $faculty->delete();
        return \redirect('facultes')->with('success', 'la faculté a été supprimé !!!');

    }
}
