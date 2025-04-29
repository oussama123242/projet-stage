<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom', 'nom', 'email', 'telephone', 'cv', 'salaire_actuel', 'pretention'
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
