<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Formation;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('apprenant.index', ['apprenant' => $apprenants]);
    }

    public function formation()
    {
        $formations = Formation::all();
        return view('apprenant/formation', ['formation' => $formations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formations = Formation::all();
        return view('apprenant/ajout', compact('formations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // Apprenant::create($input);
        // return redirect('apprenant')->with('flash_message','Projet créé');

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'niveau' => 'required',
            'formations' => 'array|required',
        ]);

        // Créer l'apprenant
        $apprenant = Apprenant::create($validatedData);

        // Attacher les formations à l'apprenant
        $apprenant->formations()->attach($validatedData['formations']);

        // Rediriger avec un message de succès
        return redirect()->route('apprenant.index')->with('success', 'Apprenant ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $apprenant = Apprenant::find($id);
        return view('apprenant.show', compact('apprenant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
