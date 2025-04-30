<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidature;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidatureSubmitted;

class CandidatureController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
            'poste' => 'required|string|max:255',
            'diplome' => 'nullable|string|max:255',
            'ecole' => 'nullable|string|max:255',
            'date_debut_formation' => 'nullable|date',
            'date_fin_formation' => 'nullable|date',
            'poste_experience' => 'nullable|string|max:255',
            'entreprise' => 'nullable|string|max:255',
            'date_debut_experience' => 'nullable|date',
            'date_fin_experience' => 'nullable|date',
            'motivation' => 'nullable|string',
        ]);

        // Enregistrer le CV
        if ($request->hasFile('cv')) {
            $cvName = time() . '_' . $request->cv->getClientOriginalName();
            $cvPath = 'uploads/cv/' . $cvName; // احفظ المسار هنا
            $request->cv->move(public_path('uploads/cv'), $cvName);
        } else {
            return back()->with('error', 'Veuillez joindre un CV.');
        }
        

        // Créer la candidature
        $candidature = Candidature::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'cv' => $cvPath,
            'poste' => $request->poste,
            'diplome' => $request->diplome,
            'ecole' => $request->ecole,
            'date_debut_formation' => $request->date_debut_formation,
            'date_fin_formation' => $request->date_fin_formation,
            'poste_experience' => $request->poste_experience,
            'entreprise' => $request->entreprise,
            'date_debut_experience' => $request->date_debut_experience,
            'date_fin_experience' => $request->date_fin_experience,
            'motivation' => $request->motivation,
        ]);

        // Envoyer l'email
        Mail::to('oussamabendoudi29@gmail.com')->send(new CandidatureSubmitted($candidature));
        return redirect()->route('success');


    }
}
