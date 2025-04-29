<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidature_id', 'diplome', 'ecole', 'date_debut_formation', 'date_fin_formation'
    ];

    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    }
}
