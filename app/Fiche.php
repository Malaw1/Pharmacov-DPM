<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    protected $fillable = [
        'numero', 'description', 'antecedents', 'pathologies'
    ];
}
