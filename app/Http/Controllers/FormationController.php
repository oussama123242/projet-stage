<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationController extends Controller
{
    // Méthode pour afficher le formulaire de formation
    public function showForm()
    {
        return view('formation.apply'); // Vue avec le formulaire
    }

    // Méthode pour traiter la soumission du formulaire
    public function store(Request $request, $candidature)
    {
        // Validation des données
        $validated = $request->validate([
            'diplome' => 'nullable|string|max:255',
            'ecole' => 'nullable|string|max:255',
            'date_debut_formation' => 'nullable|date',
            'date_fin_formation' => 'nullable|date',
        ]);

        // Enregistrement de la formation dans la base de données
        $formation = new Formation();
        $formation->diplome = $validated['diplome'];
        $formation->ecole = $validated['ecole'];
        $formation->date_debut_formation = $validated['date_debut_formation'];
        $formation->date_fin_formation = $validated['date_fin_formation'];

        // Sauvegarder la formation dans la base de données
        $formation->save();

        // Redirection après soumission réussie
        return redirect()->route('formation.success');
    }
}
