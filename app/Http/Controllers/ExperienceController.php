<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    // Méthode pour afficher le formulaire d'expérience professionnelle
    public function showForm()
    {
        return view('experience.apply'); // Vue avec le formulaire
    }

    // Méthode pour traiter la soumission du formulaire
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom_entreprise' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date',
            'description' => 'nullable|string',
        ]);

        // Enregistrement de l'expérience dans la base de données
        $experience = new Experience();
        $experience->nom_entreprise = $validated['nom_entreprise'];
        $experience->poste = $validated['poste'];
        $experience->date_debut = $validated['date_debut'];
        $experience->date_fin = $validated['date_fin'];
        $experience->description = $validated['description'];

        // Sauvegarder l'expérience dans la base de données
        $experience->save();

        // Redirection après soumission réussie
        return redirect()->route('experience.success');
    }
}
