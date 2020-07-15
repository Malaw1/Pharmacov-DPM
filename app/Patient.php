<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'numero_dossier', 'initial', 'age', 'sexe', 'poids', 'taille', 'facteur_associe', 'fiche_id'
    ];

}
