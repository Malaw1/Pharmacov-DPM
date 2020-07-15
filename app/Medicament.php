<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $fillable = [
        'produit', 'voie', 'posologie', 'forme', 'lot', 'fabricant', 'date_prise', 'date_fin_prise', 'plante_medicinale', 'fiche_id'
    ];
}
