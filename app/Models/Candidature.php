<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom', 'nom', 'email', 'telephone', 'cv', 'poste', 'diplome', 'ecole',
        'date_debut_formation', 'date_fin_formation', 'poste_experience', 'entreprise',
        'date_debut_experience', 'date_fin_experience', 'motivation'
    ];
    
    

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
