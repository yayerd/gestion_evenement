<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('evenements.ajouter');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evenements.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|max:255',
            'image' => 'required',
            'description' => 'required',
            'date_evenement' => 'required',
            'statut' => 'required',
            'date_limite' => 'required',

        ]);
        $evenement = new Evenement();
        $evenement->libelle = $request->libelle;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $evenement['image'] = $filename;
        }

        $evenement->statut = $request->statut;
        $evenement->date_limite = $request->date_limite;
        // Attribuer l'id de l'association dans la table évènement 
        //  Un guard avait été créé dans auth.php car association est un second type de user
        $evenement->association_id=Auth::guard('association')->user()->id;
         // dd($evenement);
        $evenement->save();
        // return "Evenement publié";
        return redirect()->route('listerevenement');

    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
    }
}
