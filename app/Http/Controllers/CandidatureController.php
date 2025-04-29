<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Formation;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidatureSubmitted;

class CandidatureController extends Controller
{
    // Affiche le formulaire de candidature
    public function showForm($id)
    {
        $candidature = Candidature::findOrFail($id);
        return view('apply', compact('candidature'));
    }
    
    

    // Traite la soumission du formulaire de candidature
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'cv' => 'required|mimes:pdf|max:2048',
            'salaire_actuel' => 'nullable|string',
            'pretention' => 'nullable|string',
            'diplome' => 'required|string',
            'ecole' => 'required|string',
            'date_debut_formation' => 'required|date',
            'date_fin_formation' => 'required|date',
            'poste' => 'required|string',
            'entreprise' => 'required|string',
            'date_debut_experience' => 'required|date',
            'date_fin_experience' => 'required|date',
        ]);

        // Traitement du fichier CV (stockage dans le dossier 'cv' de 'public')
        $cvPath = $request->file('cv')->store('cv', 'public');

        // Création de la candidature
        $candidature = Candidature::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'cv' => $cvPath,
            'salaire_actuel' => $request->salaire_actuel,
            'pretention' => $request->pretention,
        ]);

        // Enregistrement des informations de formation
        Formation::create([
            'candidature_id' => $candidature->id,
            'diplome' => $request->diplome,
            'ecole' => $request->ecole,
            'date_debut_formation' => $request->date_debut_formation,
            'date_fin_formation' => $request->date_fin_formation,
        ]);

        // Enregistrement des informations d'expérience
        Experience::create([
            'candidature_id' => $candidature->id,
            'poste' => $request->poste,
            'entreprise' => $request->entreprise,
            'date_debut_experience' => $request->date_debut_experience,
            'date_fin_experience' => $request->date_fin_experience,
        ]);

        // 📨 Envoi de l'email de confirmation
        Mail::to(env('CANDIDATURE_EMAIL'))->send(new CandidatureSubmitted($candidature));

        // Redirection vers la page de succès
        return redirect()->route('candidature.success');
    }
}
