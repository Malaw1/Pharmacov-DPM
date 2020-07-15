<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suivi extends Model
{
    protected $fillable = [
        'apparition_effet', 'disparition_effet', 'readministration', 'reapparition', 'traitement_correcteur', 'suivi_patient', 'evolution','fiche_id'
    ];
}
