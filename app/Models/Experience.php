<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidature_id', 'poste', 'entreprise', 'date_debut_experience', 'date_fin_experience'
    ];

    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    }
}
